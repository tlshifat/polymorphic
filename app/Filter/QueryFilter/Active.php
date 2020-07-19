<?php


namespace App\Filter\QueryFilter;
use App\Service\QueryService;
use Closure;

class Active extends QueryService
{
//    public function handle($request,Closure $next)
//    {
//        if(!request()->has('active')){
//            return $next($request);
//        }
//        $builder = $next($request);
//        return $builder->orderBy('name','asc');
//    }
    protected function applyFilter($builder)
    {
        return $builder->orderBy('name','asc');
    }
}
