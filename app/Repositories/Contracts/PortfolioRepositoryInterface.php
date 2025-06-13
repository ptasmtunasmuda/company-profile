<?php

namespace App\Repositories\Contracts;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface PortfolioRepositoryInterface
{
    public function getFeatured(int $limit = 6): Collection;
    public function getActive(int $perPage = 12): LengthAwarePaginator;
    public function findBySlug(string $slug): ?Portfolio;
    public function getRelated(int $excludeId, int $limit = 3): Collection;
    public function findById(int $id): ?Portfolio;
}
