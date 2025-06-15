<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 rounded-full text-sm font-semibold mb-6 border border-gray-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Koleksi Lengkap
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                All <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Projects</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Jelajahi portofolio lengkap kami yang menampilkan berbagai proyek lintas industri</p>
        </div>

        @if($portfolios->count() > 0)
            <!-- Portfolio Items -->
            <div class="portfolio-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
                @foreach($portfolios as $portfolio)
                    <div class="portfolio-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
                            data-category="{{ strtolower($portfolio->category ?? 'other') }}"
                            data-aos="fade-up"
                            data-aos-delay="{{ ($loop->index % 6) * 100 }}">

                            <div class="absolute inset-0 bg-gradient-to-br from-primary-50/50 to-purple-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                        <div class="relative z-10">
                            <!-- Image -->
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

                            <!-- Content -->
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
                                        <svg class="w-5 h-5 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
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
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16" data-aos="fade-up">
                <button id="loadMore" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Muat Lebih Banyak Proyek
                    <svg class="w-5 h-5 ml-3 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center" data-aos="fade-up">
                <div class="flex space-x-2">
                    {{-- Previous Page Link --}}
                    @if ($portfolios->onFirstPage())
                        <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-lg cursor-not-allowed">
                            Sebelumnya
                        </span>
                    @else
                        <a href="{{ $portfolios->previousPageUrl() }}"
                            class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                            Sebelumnya
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @if($portfolios->lastPage() > 1)
                        @php
                            $start = max($portfolios->currentPage() - 2, 1);
                            $end = min($start + 4, $portfolios->lastPage());
                            $start = max($end - 4, 1);
                        @endphp

                        @if($start > 1)
                            <a href="{{ $portfolios->url(1) }}"
                                class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                                1
                            </a>
                            @if($start > 2)
                                <span class="px-4 py-2 text-gray-500">...</span>
                            @endif
                        @endif

                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $portfolios->currentPage())
                                <span class="px-4 py-2 bg-primary-600 text-white rounded-lg font-semibold shadow-md">
                                    {{ $i }}
                                </span>
                            @else
                                <a href="{{ $portfolios->url($i) }}"
                                    class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                                    {{ $i }}
                                </a>
                            @endif
                        @endfor

                        @if($end < $portfolios->lastPage())
                            @if($end < $portfolios->lastPage() - 1)
                                <span class="px-4 py-2 text-gray-500">...</span>
                            @endif
                            <a href="{{ $portfolios->url($portfolios->lastPage()) }}"
                                class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                                {{ $portfolios->lastPage() }}
                            </a>
                        @endif
                    @endif

                    {{-- Next Page Link --}}
                    @if ($portfolios->hasMorePages())
                        <a href="{{ $portfolios->nextPageUrl() }}"
                            class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                            Lanjut
                        </a>
                    @else
                        <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-lg cursor-not-allowed">
                            Lanjut
                        </span>
                    @endif
                </div>
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-24">
                <div class="relative mb-12">
                    <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full mx-auto flex items-center justify-center shadow-xl">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <!-- Floating elements around empty state -->
                    <div class="absolute top-0 left-1/4 w-4 h-4 bg-primary-200 rounded-full animate-bounce animation-delay-1000"></div>
                    <div class="absolute top-1/4 right-1/4 w-3 h-3 bg-purple-200 rounded-full animate-pulse"></div>
                    <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-pink-200 rounded-full animate-ping"></div>
                </div>

                <h3 class="text-3xl font-bold text-gray-900 mb-6">Proyek Menakjubkan Akan Segera Hadir</h3>
                <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Saat ini kami tengah menciptakan pengalaman digital yang luar biasa bagi klien kami.
                    Kunjungi kembali segera untuk melihat inovasi terbaru kami!
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('contact') }}"
                        class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-bold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Mulai Project Anda
                        <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                    <a href="{{ route('services') }}"
                        class="group inline-flex items-center px-8 py-4 border-2 border-primary-600 text-primary-600 rounded-2xl font-bold hover:bg-primary-600 hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                        </svg>
                        Layanan kami
                    </a>
                </div>
            </div>
        @endif
    </div>
</section>
