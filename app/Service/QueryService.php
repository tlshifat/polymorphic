<?php


namespace App\Service;


use Illuminate\Support\Str;

abstract class QueryService
{
    public function handle($request,\Closure $next)
    {
        $filterName= Str::snake($this->getName());

        if(!request()->has($filterName)){
            return $next($request);
        }
        $builder = $next($request);


        return $this->applyFilter($builder );
    }

    public function getName(){

        return class_basename($this);
    }

    protected abstract function applyFilter($builder);
}
