<?php

namespace App\Services;

use App\Models\Portfolio;
use App\Repositories\Contracts\PortfolioRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;

class PortfolioService
{
    public function __construct(
        private PortfolioRepositoryInterface $portfolioRepository
    ) {}

    public function getFeaturedPortfolios(int $limit = 6): Collection
    {
        return $this->portfolioRepository->getFeatured($limit);
    }

    public function getActivePortfolios(int $perPage = 12): LengthAwarePaginator
    {
        return $this->portfolioRepository->getActive($perPage);
    }

    public function getPortfolioBySlug(string $slug): Portfolio
    {
        $portfolio = $this->portfolioRepository->findBySlug($slug);

        if (!$portfolio) {
            throw new ModelNotFoundException('Portfolio not found');
        }

        return $portfolio;
    }

    public function getRelatedPortfolios(int $excludeId, int $limit = 3): Collection
    {
        return $this->portfolioRepository->getRelated($excludeId, $limit);
    }
}
