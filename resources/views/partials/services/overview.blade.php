<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="overview-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#overview-grid)" />
        </svg>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Tentang Layanan Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Solusi Digital
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Terlengkap
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
        </div>

        <!-- Content Card -->
        <div class="prose prose-lg prose-primary max-w-none" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white/95 backdrop-blur-xl rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl relative">
                <!-- Decorative corner elements -->
                <div class="absolute top-4 left-4 w-8 h-8 border-l-4 border-t-4 border-primary-200 rounded-tl-lg"></div>
                <div class="absolute top-4 right-4 w-8 h-8 border-r-4 border-t-4 border-primary-200 rounded-tr-lg"></div>
                <div class="absolute bottom-4 left-4 w-8 h-8 border-l-4 border-b-4 border-primary-200 rounded-bl-lg"></div>
                <div class="absolute bottom-4 right-4 w-8 h-8 border-r-4 border-b-4 border-primary-200 rounded-br-lg"></div>

                @if($page->content)
                    {!! $page->content !!}
                @else
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Kami menyediakan layanan digital terlengkap untuk membantu bisnis Anda berkembang di era digital. Dari pengembangan website hingga strategi pemasaran digital, tim ahli kami siap memberikan solusi terbaik yang disesuaikan dengan kebutuhan unik bisnis Anda.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Dengan pengalaman lebih dari 8 tahun dan telah menangani 150+ proyek sukses, kami memahami tantangan yang dihadapi bisnis modern. Tim multidisiplin kami terdiri dari developer berpengalaman, UI/UX designer kreatif, dan digital strategist yang siap mengubah visi digital Anda menjadi kenyataan.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Bergabunglah dengan lebih dari 50 klien yang telah merasakan transformasi digital bersama kami. Dari startup hingga perusahaan enterprise, kami bangga telah membantu mencapai target bisnis mereka melalui solusi teknologi yang inovatif dan efektif.
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>
