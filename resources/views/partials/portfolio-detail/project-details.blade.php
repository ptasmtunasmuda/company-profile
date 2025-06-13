<div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-8 border border-gray-100" data-aos="fade-left">
    <div class="flex items-center mb-6">
        <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-purple-600 rounded-xl flex items-center justify-center mr-3">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900">Project Details</h3>
    </div>

    <div class="space-y-6">
        @include('partials.portfolio-detail.detail-item', [
            'condition' => $portfolio->client_name,
            'label' => 'Client',
            'value' => $portfolio->client_name,
            'iconColor' => 'bg-blue-100 text-blue-600',
            'iconPath' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'
        ])

        @include('partials.portfolio-detail.detail-item', [
            'condition' => $portfolio->completed_at,
            'label' => 'Completion Date',
            'value' => $portfolio->completed_at?->format('F Y'),
            'iconColor' => 'bg-green-100 text-green-600',
            'iconPath' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'
        ])

        @include('partials.portfolio-detail.detail-item-url', ['portfolio' => $portfolio])
        @include('partials.portfolio-detail.detail-item-technologies', ['portfolio' => $portfolio])
    </div>
</div>
