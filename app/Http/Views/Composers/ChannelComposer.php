<?php


namespace App\Http\Views\Composers;


use App\Channel;
use Illuminate\View\View;

class ChannelComposer
{
        public function compose(View $view){
            $view->with('channels',Channel::all());

        }
}
