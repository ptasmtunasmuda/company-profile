<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPortfolios = Portfolio::active()
            ->featured()
            ->ordered()
            ->take(6)
            ->get();

        $testimonials = Testimonial::active()
            ->ordered()
            ->take(6)
            ->get();

        // Get hero content from settings
        $heroContent = [
            'title' => Setting::get('hero_title', 'Build Your Digital Future With Us'),
            'subtitle' => Setting::get('hero_subtitle', 'We create modern websites and mobile applications.'),
            'cta_text' => Setting::get('hero_cta_text', 'Get Free Consultation'),
            'cta_link' => Setting::get('hero_cta_link', '#contact'),
        ];

        // Get about content
        $aboutContent = [
            'title' => Setting::get('about_title', 'About Our Company'),
            'subtitle' => Setting::get('about_subtitle', 'Your Trusted Technology Partner'),
            'description' => Setting::get('about_description'),
        ];

        // Get statistics
        $stats = [
            'projects' => Setting::get('stat_projects', '100+'),
            'clients' => Setting::get('stat_clients', '50+'),
            'experience' => Setting::get('stat_experience', '5+'),
            'satisfaction' => Setting::get('stat_satisfaction', '99%'),
        ];

        return view('home', compact(
            'featuredPortfolios',
            'testimonials',
            'heroContent',
            'aboutContent',
            'stats'
        ));
    }

    public function about()
    {
        $page = Page::where('slug', 'about-us')->firstOrFail();
        return view('pages.about', compact('page'));
    }

    public function services()
    {
        $page = Page::where('slug', 'services')->firstOrFail();
        return view('pages.services', compact('page'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::active()
            ->ordered()
            ->paginate(12);

        $featuredPortfolios = Portfolio::active()
            ->featured()
            ->ordered()
            ->take(3)
            ->get();

        return view('pages.portfolio', compact('portfolios', 'featuredPortfolios'));
    }

    public function portfolioDetail($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $relatedPortfolios = Portfolio::active()
            ->where('id', '!=', $portfolio->id)
            ->ordered()
            ->take(3)
            ->get();

        return view('pages.portfolio-detail', compact('portfolio', 'relatedPortfolios'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('pages.show', compact('page'));
    }
}
