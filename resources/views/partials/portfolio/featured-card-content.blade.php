<div class="p-8">
    <div class="flex items-start justify-between mb-4">
        <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
            {{ $portfolio->title }}
        </h3>
        <div class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            @include('partials.icons.arrow-right')
        </div>
    </div>

    @if($portfolio->client_name ?? false)
        <div class="flex items-center mb-4">
            <div class="w-8 h-8 bg-gradient-to-br from-primary-400 to-purple-500 rounded-full flex items-center justify-center mr-3">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <span class="text-primary-600 font-semibold">{{ $portfolio->client_name }}</span>
        </div>
    @endif

    <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">{{ $portfolio->description }}</p>

    @if($portfolio->technologies ?? false)
        <div class="flex flex-wrap gap-2 mb-6">
            @foreach(array_slice($portfolio->technologies, 0, 4) as $tech)
                <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">
                    {{ $tech }}
                </span>
            @endforeach
            @if(count($portfolio->technologies) > 4)
                <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium border border-gray-200">
                    +{{ count($portfolio->technologies) - 4 }} more
                </span>
            @endif
        </div>
    @endif

    <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
       class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
        Jelajahi Proyek
        @include('partials.icons.arrow-right')
    </a>
</div>
