<?php

namespace App\Services;

use App\Repositories\Contracts\TestimonialRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class TestimonialService
{
    public function __construct(
        private TestimonialRepositoryInterface $testimonialRepository
    ) {}

    public function getActiveTestimonials(int $limit = 6): Collection
    {
        return $this->testimonialRepository->getActive($limit);
    }

    public function getAllTestimonials(int $perPage = 15): LengthAwarePaginator
    {
        return $this->testimonialRepository->getAll($perPage);
    }
}
