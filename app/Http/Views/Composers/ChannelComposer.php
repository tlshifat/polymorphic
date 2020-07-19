<?php


namespace App\Http\Views\Composers;


use App\Channel;
use App\Filter\QueryFilter\Active;
use App\Filter\QueryFilter\Limit;
use App\Post;

use Illuminate\Pipeline\Pipeline;
use Illuminate\View\View;

class ChannelComposer
{
        public function compose(View $view){
            $pipeline = app(Pipeline::class)
                ->send(Post::query())
                ->through([Active::class,Limit::class])
                ->thenReturn();
            $pipeline =$pipeline->get();

            $view->with('channels',$pipeline);
        }
}
