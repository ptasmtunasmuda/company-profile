<section class="py-20 bg-gradient-to-br from-primary-600 to-primary-900 relative overflow-hidden">
    @include('partials.shared.hero-background')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium text-blue-100 mb-6">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Siap untuk memulai?
            </div>
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Mari Kita Bangun Sesuatu yang Menakjubkan Bersama</h2>
            <p class="text-xl md:text-2xl text-blue-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                Mari kita bahas ide-ide Anda dan lihat bagaimana kami dapat membantu Anda mewujudkannya. Hubungi kami hari ini untuk konsultasi gratis.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact') }}"
                    class="group relative inline-flex items-center px-8 py-4 bg-white text-primary-600 rounded-2xl font-bold text-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                    Dapatkan Konsultasi Gratis
                    @include('partials.icons.arrow-right')
                </a>

                <a href="{{ route('portfolio') }}"
                    class="group inline-flex items-center px-8 py-4 border-2 border-white/30 text-white rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-sm">
                    @include('partials.icons.portfolio')
                    Lihat Pekerjaan Kami
                </a>
            </div>

            @php
                $contactSettings = app(\App\Services\CachedSettingService::class)->getMultiple(['contact_email', 'contact_phone']);
            @endphp

            <!-- Contact Info -->
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-8 text-blue-100">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    {{ $contactSettings['contact_email'] ?? 'info@company.com' }}
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    {{ $contactSettings['contact_phone'] ?? '+62 123-456-7890' }}
                </div>
            </div>
        </div>
    </div>
</section>
