<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function __construct(
        private SettingService $settingService
    ) {}

    public function index(): View
    {
        $contactSettings = $this->settingService->getMultiple([
            'contact_address',
            'contact_phone',
            'contact_email',
            'office_hours'
        ]);

        return view('pages.contact', compact('contactSettings'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Contact::create($validated);

        // Send notification email here if needed
        // Mail::to(config('mail.contact_email'))->send(new ContactFormMail($validated));

        return redirect()->route('contact')
            ->with('success', 'Terima kasih atas pesan Anda! Kami akan segera menghubungi Anda dalam 24 jam.');
    }
}
