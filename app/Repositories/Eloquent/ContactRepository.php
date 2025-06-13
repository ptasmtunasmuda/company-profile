<?php

namespace App\Repositories\Eloquent;

use App\DataTransferObjects\ContactData;
use App\Models\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactRepository implements ContactRepositoryInterface
{
    public function __construct(
        private Contact $contact
    ) {}

    public function create(ContactData $contactData): Contact
    {
        return $this->contact->create($contactData->toArray());
    }

    public function getUnread(int $perPage = 15): LengthAwarePaginator
    {
        return $this->contact
            ->unread()
            ->latest()
            ->paginate($perPage);
    }

    public function getAll(int $perPage = 15): LengthAwarePaginator
    {
        return $this->contact
            ->latest()
            ->paginate($perPage);
    }

    public function markAsRead(int $contactId): bool
    {
        $contact = $this->findById($contactId);

        if (!$contact) {
            return false;
        }

        $contact->markAsRead();
        return true;
    }

    public function findById(int $id): ?Contact
    {
        return $this->contact->find($id);
    }
}
