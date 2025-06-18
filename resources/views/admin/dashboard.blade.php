@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-600">Total Portfolios</h3>
                    <p class="text-2xl font-bold text-gray-900">{{ $stats['total_portfolios'] }}</p>
                    <p class="text-sm text-green-600 font-medium">{{ $stats['active_portfolios'] }} active</p>
                </div>
            </div>
        </div>

        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-600">Testimonials</h3>
                    <p class="text-2xl font-bold text-gray-900">{{ $stats['total_testimonials'] }}</p>
                </div>
            </div>
        </div>

        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-600">Unread Messages</h3>
                    <p class="text-2xl font-bold text-gray-900">{{ $stats['unread_contacts'] }}</p>
                    @if($stats['unread_contacts'] > 0)
                        <a href="{{ route('admin.contacts.index') }}" class="text-sm text-blue-600 hover:text-blue-700 font-medium">View messages →</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-600">This Month</h3>
                    <p class="text-2xl font-bold text-gray-900">{{ $chartData[date('n') - 1] ?? 0 }}</p>
                    <p class="text-sm text-gray-500">New contacts</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Monthly Contacts Chart -->
        <div class="admin-card">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Monthly Contacts</h3>
                <div class="admin-badge-info">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Analytics
                </div>
            </div>
            <div class="h-64">
                <canvas id="contactsChart"></canvas>
            </div>
        </div>

        <!-- Recent Contacts -->
        <div class="admin-card">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Recent Messages</h3>
                <a href="{{ route('admin.contacts.index') }}" class="text-sm text-blue-600 hover:text-blue-700 font-medium">View all →</a>
            </div>

            @if($recentContacts->count() > 0)
                <div class="space-y-4">
                    @foreach($recentContacts as $contact)
                        <div class="flex items-start space-x-3 p-3 {{ !$contact->is_read ? 'bg-blue-50 border border-blue-200' : '' }} rounded-lg">
                            <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-sm font-semibold text-gray-600">{{ substr($contact->name, 0, 1) }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900 truncate">{{ $contact->name }}</p>
                                    <span class="text-xs text-gray-500">{{ $contact->created_at->diffForHumans() }}</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">{{ $contact->subject }}</p>
                                <p class="text-xs text-gray-500 truncate">{{ Str::limit($contact->message, 60) }}</p>
                            </div>
                            @if(!$contact->is_read)
                                <div class="w-2 h-2 bg-blue-500 rounded-full flex-shrink-0"></div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <p class="text-gray-500">No messages yet</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Recent Portfolios -->
    <div class="admin-card">
        <div class="admin-card-header">
            <h3 class="admin-card-title">Recent Portfolio Projects</h3>
            <a href="{{ route('admin.portfolios.index') }}" class="text-sm text-blue-600 hover:text-blue-700 font-medium">View all →</a>
        </div>

        @if($recentPortfolios->count() > 0)
            <div class="overflow-x-auto admin-scrollbar admin-scrollbar">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Client</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentPortfolios as $portfolio)
                            <tr>
                                <td>
                                    <div class="flex items-center">
                                        @if($portfolio->getFirstMediaUrl('featured_image'))
                                            <img class="h-10 w-10 rounded-lg object-cover" src="{{ $portfolio->getFirstMediaUrl('featured_image', 'thumb') }}" alt="{{ $portfolio->title }}">
                                        @else
                                            <div class="h-10 w-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                        @endif
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $portfolio->title }}</div>
                                            <div class="text-sm text-gray-500">{{ Str::limit($portfolio->description, 50) }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class=" text-sm text-gray-900">
                                    {{ $portfolio->client_name ?: '-' }}
                                </td>
                                <td>
                                    <div class="flex items-center space-x-2">
                                        @if($portfolio->is_active)
                                            <span class="admin-badge-success">Active</span>
                                        @else
                                            <span class="admin-badge-danger">Inactive</span>
                                        @endif
                                        @if($portfolio->is_featured)
                                            <span class="admin-badge-warning">Featured</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-gray-500">
                                    {{ $portfolio->created_at->diffForHumans() }}
                                </td>
                                <td>
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="text-blue-600 hover:text-blue-700 font-medium">Edit</a>
                                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}" target="_blank" class="text-gray-600 hover:text-gray-800 font-medium">View</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-8">
                <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <p class="text-gray-500">No portfolio projects yet</p>
                <a href="{{ route('admin.portfolios.create') }}" class="mt-4 admin-btn-primary">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Create First Project
                </a>
            </div>
        @endif
    </div>

    <!-- Quick Actions -->
    <div class="admin-card">
        <div class="admin-card-header">
            <h3 class="admin-card-title">Quick Actions</h3>
            <div class="admin-badge-info">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Shortcuts
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('admin.portfolios.create') }}" class="group bg-white border border-gray-200 hover:border-blue-300 hover:shadow-md p-4 rounded-lg admin-transition">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center group-hover:bg-blue-700 admin-transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-900 group-hover:text-blue-700">Add Portfolio</p>
                        <p class="text-xs text-gray-600">Create new project</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.testimonials.create') }}" class="group bg-white border border-gray-200 hover:border-green-300 hover:shadow-md p-4 rounded-lg admin-transition">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center group-hover:bg-green-700 admin-transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-900 group-hover:text-green-700">Add Testimonial</p>
                        <p class="text-xs text-gray-600">New client review</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.pages.create') }}" class="group bg-white border border-gray-200 hover:border-purple-300 hover:shadow-md p-4 rounded-lg admin-transition">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center group-hover:bg-purple-700 admin-transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-900 group-hover:text-purple-700">Create Page</p>
                        <p class="text-xs text-gray-600">New content page</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.settings.index') }}" class="group bg-white border border-gray-200 hover:border-gray-300 hover:shadow-md p-4 rounded-lg admin-transition">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-600 rounded-lg flex items-center justify-center group-hover:bg-gray-700 admin-transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-900 group-hover:text-gray-700">Site Settings</p>
                        <p class="text-xs text-gray-600">Configure website</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('contactsChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Contacts',
                data: @json($chartData),
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
});
</script>
@endpush
@endsection
