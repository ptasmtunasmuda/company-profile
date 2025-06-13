<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Services\SettingService;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function __construct(
        private SettingService $settingService
    ) {}

    public function index(): View
    {
        $page = Page::where('slug', 'about-us')
            ->with('media')
            ->active()
            ->firstOrFail();

        $stats = $this->settingService->getStats();
        $contactSettings = $this->settingService->getMultiple([
            'contact_email',
            'contact_phone'
        ]);

        return view('pages.about', compact('page', 'stats', 'contactSettings'));
    }
}
