<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="featured-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#featured-grid)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold mb-6 shadow-xl transform hover:scale-105 transition-transform duration-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Project Pemenang Penghargaan
            </div>
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-black text-gray-900 mb-8 leading-tight">
                Karya <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Unggulan</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Project luar biasa yang menunjukkan komitmen kami terhadap keunggulan dan inovasi</p>
        </div>

        <!-- Featured Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-10">
            @foreach($featuredPortfolios as $portfolio)
                <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20">
                        <div class="absolute -top-4 -right-4 z-20">
                            <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12 group-hover:rotate-6 transition-transform duration-300">
                                ⭐ Unggulan
                            </div>
                        </div>

                        <!-- Image -->
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

                        <!-- Content -->
                        <div class="p-8">
                            <div class="flex items-start justify-between mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                                    {{ $portfolio->title }}
                                </h3>
                                <div class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <svg class="w-6 h-6 text-primary-600 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
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
                                <svg class="w-5 h-5 ml-3 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
