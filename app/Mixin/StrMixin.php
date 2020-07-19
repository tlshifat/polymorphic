<?php


namespace App\Mixin;


class StrMixin
{
    public function no()
    {
        return function ($message){
          return $message;
        };
    }

    public function yes()
    {
        return function ($message){
            return $message;
        };
    }

}
