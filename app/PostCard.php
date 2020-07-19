<?php


namespace App;


class PostCard
{
    public static  function __callStatic($method,$arguments)
    {
        return self::resolveFacade('PostCard')->$method(...$arguments);
    }

    public static function resolveFacade($name)
    {
        return app()[$name];
    }
}
