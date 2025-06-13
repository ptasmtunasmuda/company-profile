<?php

namespace App\Http\Controllers;

use App\Actions\Contact\StoreContactAction;
use App\DataTransferObjects\ContactData;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function __construct(
        private StoreContactAction $storeContactAction
    ) {}

    public function store(StoreContactRequest $request): RedirectResponse
    {
        try {
            $contactData = ContactData::fromRequest($request->validated());
            $this->storeContactAction->execute($contactData);

            return back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (\Exception $e) {
            report($e);
            return back()
                ->with('error', 'Something went wrong. Please try again.')
                ->withInput();
        }
    }
}
