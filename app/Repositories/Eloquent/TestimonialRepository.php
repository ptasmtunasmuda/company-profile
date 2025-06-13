<?php

namespace App\Repositories\Eloquent;

use App\Models\Testimonial;
use App\Repositories\Contracts\TestimonialRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class TestimonialRepository implements TestimonialRepositoryInterface
{
    public function __construct(
        private Testimonial $testimonial
    ) {}

    public function getActive(int $limit = 6): Collection
    {
        return $this->testimonial
            ->with(['media' => function ($query) {
                $query->where('collection_name', 'avatar'); // Specific collection
            }])
            ->active()
            ->ordered()
            ->limit($limit)
            ->get();
    }

    public function getAll(int $perPage = 15): LengthAwarePaginator
    {
        return $this->testimonial
            ->with(['media' => function ($query) {
                $query->where('collection_name', 'avatar');
            }])
            ->ordered()
            ->paginate($perPage);
    }

    public function findById(int $id): ?Testimonial
    {
        return $this->testimonial
            ->with(['media' => function ($query) {
                $query->where('collection_name', 'avatar');
            }])
            ->find($id);
    }
}
