<div class="p-6">
    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
        {{ $related->title }}
    </h3>

    @if($related->client_name)
        <p class="text-sm text-primary-600 font-medium mb-3 flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            {{ $related->client_name }}
        </p>
    @endif

    <p class="text-gray-600 mb-6 leading-relaxed">{{ Str::limit($related->description, 100) }}</p>

    <div class="flex items-center justify-between">
        <a href="{{ route('portfolio.detail', $related->slug) }}"
           class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
            <span>View Project</span>
            @include('partials.icons.arrow-right')
        </a>

        @if($related->project_url)
            <a href="{{ $related->project_url }}" target="_blank"
               class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="View Live Site">
                @include('partials.icons.external-link')
            </a>
        @endif
    </div>
</div>
