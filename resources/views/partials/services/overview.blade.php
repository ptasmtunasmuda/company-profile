<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 rounded-full text-sm font-semibold mb-6 border border-gray-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Tentang Layanan Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Menyelesaikan <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Solusi Digital</span>
            </h2>
        </div>

        <div class="prose prose-lg prose-primary max-w-none" data-aos="fade-up">
            <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>
