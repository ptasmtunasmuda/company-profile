<?php

namespace App\Actions\Contact;

use App\DataTransferObjects\ContactData;
use App\Models\Contact;
use App\Services\ContactService;

class StoreContactAction
{
    public function __construct(
        private ContactService $contactService
    ) {}

    public function execute(ContactData $contactData): Contact
    {
        return $this->contactService->storeContact($contactData);
    }
}
