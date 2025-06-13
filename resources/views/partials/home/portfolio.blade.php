<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($portfolios as $portfolio)
        <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="relative overflow-hidden">
                @if(method_exists($portfolio, 'getFirstMediaUrl') && $portfolio->getFirstMediaUrl('featured_image'))
                    <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'thumb') }}" alt="{{ $portfolio->title }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                @else
                    <div class="w-full h-64 bg-gradient-to-br from-primary-100 to-blue-100 flex items-center justify-center">
                        <svg class="w-16 h-16 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                @endif

                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                    <a href="{{ route('portfolio.detail', $portfolio->slug) }}" class="bg-white text-primary-600 px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 hover:bg-primary-600 hover:text-white">
                        Lihat Project
                    </a>
                </div>

                @if($portfolio->is_featured)
                <div class="absolute top-4 left-4">
                    <span class="bg-yellow-400 text-yellow-900 text-xs px-3 py-1 rounded-full font-semibold">Unggulan</span>
                </div>
                @endif
            </div>

            <div class="p-8">
                <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300 mb-3">{{ $portfolio->title }}</h3>
                @if($portfolio->client_name)
                    <p class="text-sm text-primary-600 font-medium mb-3">{{ $portfolio->client_name }}</p>
                @endif
                <p class="text-gray-600 mb-6 leading-relaxed">{{ $portfolio->description }}</p>

                @if($portfolio->technologies)
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(array_slice($portfolio->technologies, 0, 3) as $tech)
                            <span class="px-3 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">{{ $tech }}</span>
                        @endforeach
                        @if(count($portfolio->technologies) > 3)
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+{{ count($portfolio->technologies) - 3 }}</span>
                        @endif
                    </div>
                @endif

                <a href="{{ route('portfolio.detail', $portfolio->slug) }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group-hover:translate-x-1 transform">
                    Lihat Detail
                    @include('partials.icons.arrow-right')
                </a>
            </div>
        </div>
    @endforeach
</div>
