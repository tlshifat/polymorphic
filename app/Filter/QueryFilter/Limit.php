<?php


namespace App\Filter\QueryFilter;


use App\Service\QueryService;

class Limit extends QueryService
{


    protected function applyFilter($builder)
    {
        return $builder->limit(4);
    }
}
