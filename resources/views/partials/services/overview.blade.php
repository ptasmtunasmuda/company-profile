<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="overview-grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#overview-grid)" />
        </svg>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 rounded-full text-sm font-semibold mb-6 border border-gray-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Tentang Layanan Kami
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Solusi Digital <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Terlengkap</span>
            </h2>
        </div>

        <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100 shadow-lg">
                @if($page->content)
                    {!! $page->content !!}
                @else
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Kami menyediakan layanan digital terlengkap untuk membantu bisnis Anda berkembang di era digital. Dari pengembangan website hingga strategi pemasaran digital, tim ahli kami siap memberikan solusi terbaik.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Dengan pengalaman lebih dari 5 tahun dan telah menangani 150+ proyek, kami memahami kebutuhan unik setiap klien dan memberikan hasil yang melampaui ekspektasi.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Bergabunglah dengan lebih dari 50 klien yang telah merasakan manfaat layanan kami dan rasakan perbedaannya.
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>
