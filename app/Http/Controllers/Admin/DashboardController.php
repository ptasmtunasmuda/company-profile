<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Contact;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_portfolios' => Portfolio::count(),
            'active_portfolios' => Portfolio::active()->count(),
            'total_testimonials' => Testimonial::count(),
            'unread_contacts' => Contact::unread()->count(),
        ];

        $recentContacts = Contact::latest()
            ->take(5)
            ->get();

        $recentPortfolios = Portfolio::latest()
            ->take(5)
            ->get();

        // Monthly contacts chart data
        $monthlyContacts = Contact::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $chartData = [];
        for ($i = 1; $i <= 12; $i++) {
            $chartData[] = $monthlyContacts[$i] ?? 0;
        }

        return view('admin.dashboard', compact(
            'stats',
            'recentContacts',
            'recentPortfolios',
            'chartData'
        ));
    }
}
