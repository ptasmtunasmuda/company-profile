<div class="p-6">
    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
        {{ $portfolio->title }}
    </h3>

    @if($portfolio->client_name ?? false)
        <p class="text-sm text-primary-600 font-medium mb-3 flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            {{ $portfolio->client_name }}
        </p>
    @endif

    <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">{{ Str::limit($portfolio->description, 120) }}</p>

    @if($portfolio->technologies ?? false)
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach(array_slice($portfolio->technologies, 0, 3) as $tech)
                <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">
                    {{ $tech }}
                </span>
            @endforeach
            @if(count($portfolio->technologies) > 3)
                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">
                    +{{ count($portfolio->technologies) - 3 }}
                </span>
            @endif
        </div>
    @endif

    <div class="flex items-center justify-between">
        <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
           class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
            <span>Lihat Detail</span>
            @include('partials.icons.arrow-right')
        </a>

        @if($portfolio->live_url ?? false)
            <a href="{{ $portfolio->live_url }}" target="_blank"
               class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="View Live Site">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V8a2 2 0 00-2-2h-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        @endif
    </div>
</div>
