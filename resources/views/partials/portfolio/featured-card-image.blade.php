@if($portfolio->getFirstMediaUrl('featured_image'))
    <div class="relative overflow-hidden">
        <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'large') }}"
             alt="{{ $portfolio->title }}"
             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">

        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

        <div class="absolute bottom-4 left-4 right-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500 opacity-0 group-hover:opacity-100">
            <div class="flex gap-3">
                <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                   class="flex-1 bg-white/90 backdrop-blur-sm text-gray-900 px-4 py-2 rounded-xl font-semibold text-center hover:bg-white transition-colors duration-300">
                    Lihat Detail
                </a>
                @if($portfolio->live_url ?? false)
                    <a href="{{ $portfolio->live_url }}" target="_blank"
                       class="bg-primary-600/90 backdrop-blur-sm text-white px-4 py-2 rounded-xl font-semibold hover:bg-primary-700 transition-colors duration-300">
                        Demo Langsung
                    </a>
                @endif
            </div>
        </div>

        <div class="absolute top-4 left-4">
            <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                {{ $portfolio->category ?? 'Featured' }}
            </span>
        </div>
    </div>
@else
    <div class="w-full h-64 bg-gradient-to-br from-primary-100 via-purple-100 to-pink-100 flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-400/20 to-purple-400/20"></div>
        <svg class="w-20 h-20 text-primary-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
    </div>
@endif
