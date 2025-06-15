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
            <!-- Breadcrumb Navigation -->
            <nav class="text-blue-200 mb-8" data-aos="fade-up">
                <div class="flex items-center justify-center space-x-2">
                </div>
            </nav>

            <!-- Badge Section -->
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-lg rounded-full text-sm font-semibold text-blue-100 mb-8 border border-white/20 shadow-xl" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-5 h-5 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Koleksi Portofolio Premium
            </div>

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight" data-aos="fade-up" data-aos-delay="200">
                <span class="bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent">
                    Portofolio Kami
                </span>
            </h1>

            <!-- Subtitle -->
            <div class="max-w-5xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="300">
                <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 leading-relaxed font-light">
                    Temukan
                    <span class="font-semibold text-yellow-300 relative">
                        karya digital terbaik
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-yellow-300/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0,8 Q50,0 100,8" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </span> yang telah kami ciptakan untuk
                    <span class="font-semibold text-orange-300 relative">
                        bisnis berpikiran maju
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-orange-300/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0,8 Q50,0 100,8" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </span>
                </p>
            </div>

            <!-- Portfolio Stats -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 pt-8 border-t border-white/20" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $stats->projects }}+</div>
                    <div class="text-blue-200 text-sm font-medium">Project Selesai</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $stats->clients }}+</div>
                    <div class="text-blue-200 text-sm font-medium">Klien yang Bahagia</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $stats->experience }}+</div>
                    <div class="text-blue-200 text-sm font-medium">Pengalaman Bertahun-tahun</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $stats->satisfaction }}</div>
                    <div class="text-blue-200 text-sm font-medium">Kepuasan Klien</div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="mt-16" data-aos="fade-up" data-aos-delay="500">
                <div class="flex flex-col items-center">
                    <span class="text-blue-200 text-sm font-medium mb-3">Jelajahi karya kami</span>
                    <div class="w-6 h-10 border-2 border-blue-200 rounded-full flex justify-center">
                        <div class="w-1 h-3 bg-blue-200 rounded-full mt-2 animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
