<?php

namespace App\Repositories\Contracts;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface TestimonialRepositoryInterface
{
    public function getActive(int $limit = 6): Collection;
    public function getAll(int $perPage = 15): LengthAwarePaginator;
    public function findById(int $id): ?Testimonial;
}
