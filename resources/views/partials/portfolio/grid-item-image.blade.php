@if($portfolio->getFirstMediaUrl('featured_image'))
    <div class="relative overflow-hidden rounded-t-3xl">
        <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'thumb') }}"
             alt="{{ $portfolio->title }}"
             class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700">

        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-500"></div>

        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500">
            <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
               class="bg-white/90 backdrop-blur-sm text-gray-900 px-6 py-3 rounded-xl font-semibold transform scale-95 group-hover:scale-100 transition-transform duration-300 shadow-lg">
                Tampilan Cepat
            </a>
        </div>

        <div class="absolute top-4 left-4">
            <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                {{ ucfirst($portfolio->category ?? 'Project') }}
            </span>
        </div>
    </div>
@else
    <div class="w-full h-56 bg-gradient-to-br from-gray-100 to-gray-200 rounded-t-3xl flex items-center justify-center">
        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
    </div>
@endif
