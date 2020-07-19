<?php

namespace App\Providers;

use App\Channel;
use App\Http\Views\Composers\ChannelComposer;
use App\Mixin\StrMixin;
use App\Service\PostCardService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // options 1 : Share with all views
        //View::share('channels',Channel::all());

        //option 2: view share with specific view
//        View::composer(['posts.*','channel.*'],function ($view){
//            $view->with('channels',Channel::all());
//        });
        //option 3:
//        View::composer(['posts.*','channel.*'],ChannelComposer::class);

//        Option 4 partials
        View::composer("partials.*",ChannelComposer::class);

        $this->app->bind('PostCard',function (){
            return new \App\Service\PostCardService('us',1,1);
        });

        //Macros

        Str::macro('ok',function ($name){
            return $name;
        });

        Str::mixin(new StrMixin());



    }
}
