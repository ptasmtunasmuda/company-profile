<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Tentang Layanan
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Apa itu
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    {{ $service['title'] }}?
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full"></div>
        </div>

        <div class="prose prose-lg prose-primary max-w-none" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white/95 backdrop-blur-xl rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl relative">
                <!-- Decorative corner elements -->
                <div class="absolute top-4 left-4 w-8 h-8 border-l-4 border-t-4 border-primary-200 rounded-tl-lg"></div>
                <div class="absolute top-4 right-4 w-8 h-8 border-r-4 border-t-4 border-primary-200 rounded-tr-lg"></div>
                <div class="absolute bottom-4 left-4 w-8 h-8 border-l-4 border-b-4 border-primary-200 rounded-bl-lg"></div>
                <div class="absolute bottom-4 right-4 w-8 h-8 border-r-4 border-b-4 border-primary-200 rounded-br-lg"></div>

                <p class="text-gray-600 leading-relaxed text-lg">
                    {{ $service['overview'] }}
                </p>
            </div>
        </div>
    </div>
</section>
