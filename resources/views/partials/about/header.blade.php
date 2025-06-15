<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white pt-32 pb-24 overflow-hidden">
    @include('partials.shared.hero-background')

    <!-- Decorative Elements - More Symmetrical -->
    <div class="absolute top-20 right-20 w-4 h-4 bg-blue-300 rounded-full animate-pulse"></div>
    <div class="absolute top-20 left-20 w-4 h-4 bg-purple-300 rounded-full animate-pulse"></div>
    <div class="absolute top-60 left-32 w-3 h-3 bg-purple-300 rounded-full animate-ping"></div>
    <div class="absolute top-60 right-32 w-3 h-3 bg-blue-300 rounded-full animate-ping"></div>
    <div class="absolute bottom-20 left-1/4 w-2 h-2 bg-yellow-300 rounded-full animate-pulse"></div>
    <div class="absolute bottom-20 right-1/4 w-2 h-2 bg-pink-300 rounded-full animate-pulse"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <!-- Badge Section -->
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-lg rounded-full text-sm font-semibold text-blue-100 mb-8 border border-white/20 shadow-xl" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-5 h-5 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Temukan Kisah Kami
            </div>

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight" data-aos="fade-up" data-aos-delay="200">
                <span class="bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent">
                    {{ $page->title }}
                </span>
            </h1>

            <!-- Subtitle -->
            <div class="max-w-5xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="300">
                <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 leading-relaxed font-light">
                    Pelajari tentang
                    <span class="font-semibold text-yellow-300 relative">
                        perjalanan kami
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-yellow-300/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0,8 Q50,0 100,8" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </span>,
                    <span class="font-semibold text-orange-300 relative">
                        nilai-nilai kami
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-orange-300/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0,8 Q50,0 100,8" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </span>, dan
                    <span class="font-semibold text-pink-300 relative">
                        tim yang bersemangat
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-pink-300/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0,8 Q50,0 100,8" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </span> di balik kesuksesan digital Anda
                </p>
            </div>

            <!-- Stats Preview -->
            @include('partials.shared.hero-stats', ['stats' => $stats])

            <!-- Scroll Indicator -->
            <div class="mt-16" data-aos="fade-up" data-aos-delay="500">
                <div class="flex flex-col items-center">
                    <span class="text-blue-200 text-sm font-medium mb-3">Scroll untuk melihat lebih banyak</span>
                    <div class="w-6 h-10 border-2 border-blue-200 rounded-full flex justify-center">
                        <div class="w-1 h-3 bg-blue-200 rounded-full mt-2 animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
