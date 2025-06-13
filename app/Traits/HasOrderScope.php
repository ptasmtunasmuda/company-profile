<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasOrderScope
{
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order', 'asc')
                    ->orderBy('created_at', 'desc');
    }
}
