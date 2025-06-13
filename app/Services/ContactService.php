<?php

namespace App\Services;

use App\DataTransferObjects\ContactData;
use App\Models\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContactService
{
    public function __construct(
        private ContactRepositoryInterface $contactRepository
    ) {}

    public function storeContact(ContactData $contactData): Contact
    {
        return DB::transaction(function () use ($contactData) {
            $contact = $this->contactRepository->create($contactData);

            // Optional: Send notification email
            // $this->sendNotificationEmail($contact);

            Log::info('New contact message received', [
                'contact_id' => $contact->id,
                'email' => $contact->email
            ]);

            return $contact;
        });
    }

    public function getUnreadContacts(int $perPage = 15): LengthAwarePaginator
    {
        return $this->contactRepository->getUnread($perPage);
    }

    public function getAllContacts(int $perPage = 15): LengthAwarePaginator
    {
        return $this->contactRepository->getAll($perPage);
    }

    public function markAsRead(int $contactId): bool
    {
        return $this->contactRepository->markAsRead($contactId);
    }

    // private function sendNotificationEmail(Contact $contact): void
    // {
    //     // Implementation for sending notification email
    //     // Mail::to(config('mail.admin_email'))->send(new NewContactMessage($contact));
    // }
}
