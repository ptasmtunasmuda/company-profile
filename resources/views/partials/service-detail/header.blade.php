<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white pt-32 pb-24 overflow-hidden">
    @include('partials.shared.hero-background')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">

            <!-- Service Icon -->
            <div class="inline-flex w-20 h-20 bg-gradient-to-br {{ $service['color'] }} rounded-2xl items-center justify-center mb-8 shadow-2xl" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"></path>
                </svg>
            </div>

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-6 leading-tight" data-aos="fade-up" data-aos-delay="200">
                <span class="bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent">
                    {{ $service['title'] }}
                </span>
            </h1>

            <!-- Subtitle -->
            <div class="max-w-4xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="300">
                <p class="text-xl md:text-2xl text-blue-100 leading-relaxed font-light mb-4">
                    {{ $service['subtitle'] }}
                </p>
                <p class="text-lg text-blue-200 leading-relaxed max-w-3xl mx-auto">
                    {{ $service['description'] }}
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('contact') }}" class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-xl font-bold text-lg hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl">
                    <span class="relative z-10">Konsultasi Gratis</span>
                    <svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>

                <a href="#packages" class="group inline-flex items-center px-8 py-4 bg-transparent border-2 border-white/30 text-white rounded-xl font-bold text-lg hover:bg-white/10 hover:border-white/50 transition-all duration-500 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                    Lihat Paket Harga
                </a>
            </div>
        </div>
    </div>
</section>
