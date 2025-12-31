<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class QueryFilter
{
    protected Builder $builder;
    protected array $filters = [];

    public function __construct(array $filters)
    {
        $this->filters = $filters;
    }

    protected function filter($arr)
    {
        foreach ($arr as $key => $value) {
            if (method_exists($this, $key)) {
                $this->$key($value);
            }
        }

        return $this->builder;
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        foreach ($this->filters as $key => $value) {
            if (!empty($value) && method_exists($this, $key)) {
                $this->$key($value);
            }
        }

        return $builder;
    }

    public function getFilters(): array
    {
        return $this->filters;
    }
}
