<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Proyek Lainnya
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Proyek
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Terkait
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Lihat beberapa proyek sukses lainnya dalam domain yang serupa
            </p>
        </div>

        <!-- Related Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($relatedPortfolios as $related)
                <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <!-- Background border effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <!-- Main card -->
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                        <!-- Top gradient accent -->
                        <div class="h-2 bg-gradient-to-r from-primary-600 to-purple-600"></div>

                        <!-- Image -->
                        @if($related->getFirstMediaUrl('featured_image'))
                            <div class="relative overflow-hidden">
                                <img src="{{ $related->getFirstMediaUrl('featured_image', 'thumb') }}"
                                     alt="{{ $related->title }}"
                                     class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">

                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                <!-- Hover Actions -->
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500">
                                    <a href="{{ route('portfolio.detail', $related->slug) }}"
                                       class="bg-white/90 backdrop-blur-sm text-gray-900 px-4 py-2 rounded-xl font-semibold transform scale-95 group-hover:scale-100 transition-transform duration-300 shadow-lg">
                                        Lihat Proyek
                                    </a>
                                </div>

                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                        {{ ucfirst($related->category ?? 'Proyek') }}
                                    </span>
                                </div>
                            </div>
                        @else
                            <div class="w-full h-56 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-primary-400/10 to-purple-400/10"></div>
                                <svg class="w-16 h-16 text-gray-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif

                        <!-- Content -->
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

                            <p class="text-gray-600 mb-6 leading-relaxed text-sm">{{ Str::limit($related->description, 100) }}</p>

                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <a href="{{ route('portfolio.detail', $related->slug) }}"
                                   class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                    <span>Lihat Proyek</span>
                                    <svg class="w-5 h-5 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>

                                @if($related->project_url)
                                    <a href="{{ $related->project_url }}" target="_blank"
                                       class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="Lihat Situs Live">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V8a2 2 0 00-2-2h-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                @endif
                            </div>

                            <!-- Bottom accent line -->
                            <div class="mt-4 w-16 h-1 bg-gradient-to-r from-primary-600 to-purple-600 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center mt-20" data-aos="fade-up">
            <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100 max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Ingin Melihat Lebih Banyak Karya Kami?
                </h3>
                <p class="text-gray-600 mb-6">
                    Jelajahi portofolio lengkap kami dan temukan inspirasi untuk proyek digital Anda berikutnya.
                </p>
                <a href="{{ route('portfolio') }}"
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-bold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Lihat Semua Proyek
                    <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
