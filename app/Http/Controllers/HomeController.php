<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Services\PortfolioService;
use App\Services\SettingService;
use App\Services\TestimonialService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        private PortfolioService $portfolioService,
        private TestimonialService $testimonialService,
        private SettingService $settingService
    ) {}

    public function index(): View
    {
        $featuredPortfolios = $this->portfolioService->getFeaturedPortfolios(6);
        $testimonials = $this->testimonialService->getActiveTestimonials(6);
        $heroContent = $this->settingService->getHeroContent();
        $aboutContent = $this->settingService->getAboutContent();
        $stats = $this->settingService->getStats();

        return view('home', compact(
            'featuredPortfolios',
            'testimonials',
            'heroContent',
            'aboutContent',
            'stats'
        ));
    }

    public function about(): View
    {
        return app(AboutController::class)->index();
    }

    public function services(): View
    {
        return app(ServiceController::class)->index();
    }

    public function portfolio(): View
    {
        return app(PortfolioController::class)->index();
    }

    public function portfolioDetail(string $slug): View
    {
        $portfolio = $this->portfolioService->getPortfolioBySlug($slug);
        $relatedPortfolios = $this->portfolioService->getRelatedPortfolios($portfolio->id, 3);

        return view('pages.portfolio-detail', compact('portfolio', 'relatedPortfolios'));
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function page(string $slug): View
    {
        $page = Page::where('slug', $slug)
            ->active()
            ->firstOrFail();

        return view('pages.show', compact('page'));
    }
}
