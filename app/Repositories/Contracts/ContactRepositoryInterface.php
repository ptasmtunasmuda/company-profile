<?php

namespace App\Repositories\Contracts;

use App\DataTransferObjects\ContactData;
use App\Models\Contact;
use Illuminate\Pagination\LengthAwarePaginator;

interface ContactRepositoryInterface
{
    public function create(ContactData $contactData): Contact;
    public function getUnread(int $perPage = 15): LengthAwarePaginator;
    public function markAsRead(int $contactId): bool;
    public function findById(int $id): ?Contact;
    public function getAll(int $perPage = 15): LengthAwarePaginator;
}
