<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasFeaturedScope
{
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeNotFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', false);
    }
}
