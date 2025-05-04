<?php

namespace Theaarch\Filterable\Concerns;

use Exception;
use Illuminate\Database\Eloquent\Builder;
use Theaarch\Filterable\Contracts\Filter;

trait Filterable
{
    /**
     * Apply all relevant space filters.
     *
     * @throws Exception
     */
    public function scopeFilter(
        Builder $query,
        Filter $filters,
        ?array $options = []
    ): Builder {
        return $filters->apply($query, $options);
    }
}
