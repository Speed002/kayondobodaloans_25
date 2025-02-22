<?php

namespace App\Http\QueryFilters;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class SingleDocumentFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('common_set_key', '==', $value);
    }
}
