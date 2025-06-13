<?php

namespace App\Repositories\Eloquent;

use App\Models\Portfolio;
use App\Repositories\Contracts\PortfolioRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    public function __construct(
        private Portfolio $portfolio
    ) {}

    public function getFeatured(int $limit = 6): Collection
    {
        return $this->portfolio
            ->with('media') // ← EAGER LOAD MEDIA
            ->active()
            ->featured()
            ->ordered()
            ->limit($limit)
            ->get();
    }

    public function getActive(int $perPage = 12): LengthAwarePaginator
    {
        return $this->portfolio
            ->with('media') // ← EAGER LOAD MEDIA
            ->active()
            ->ordered()
            ->paginate($perPage);
    }

    public function findBySlug(string $slug): ?Portfolio
    {
        return $this->portfolio
            ->with('media') // ← EAGER LOAD MEDIA
            ->where('slug', $slug)
            ->active()
            ->first();
    }

    public function getRelated(int $excludeId, int $limit = 3): Collection
    {
        return $this->portfolio
            ->with('media') // ← EAGER LOAD MEDIA
            ->active()
            ->where('id', '!=', $excludeId)
            ->ordered()
            ->limit($limit)
            ->get();
    }

    public function findById(int $id): ?Portfolio
    {
        return $this->portfolio
            ->with('media') // ← EAGER LOAD MEDIA
            ->find($id);
    }
}
