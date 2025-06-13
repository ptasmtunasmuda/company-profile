<?php

namespace App\Http\Controllers;

use App\Services\PortfolioService;
use App\Services\SettingService;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function __construct(
        private PortfolioService $portfolioService,
        private SettingService $settingService
    ) {}

    public function index(): View
    {
        $portfolios = $this->portfolioService->getActivePortfolios(12);
        $featuredPortfolios = $this->portfolioService->getFeaturedPortfolios(3);
        $stats = $this->settingService->getStats();

        return view('pages.portfolio', compact('portfolios', 'featuredPortfolios', 'stats'));
    }

    public function show(string $slug): View
    {
        $portfolio = $this->portfolioService->getPortfolioBySlug($slug);
        $relatedPortfolios = $this->portfolioService->getRelatedPortfolios($portfolio->id, 3);

        return view('pages.portfolio-detail', compact('portfolio', 'relatedPortfolios'));
    }
}
