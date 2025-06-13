<div class="portfolio-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
    @foreach($portfolios as $portfolio)
        <div class="portfolio-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
             data-category="{{ strtolower($portfolio->category ?? 'other') }}"
             data-aos="fade-up"
             data-aos-delay="{{ ($loop->index % 6) * 100 }}">

            <div class="absolute inset-0 bg-gradient-to-br from-primary-50/50 to-purple-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <div class="relative z-10">
                @include('partials.portfolio.grid-item-image', ['portfolio' => $portfolio])
                @include('partials.portfolio.grid-item-content', ['portfolio' => $portfolio])
            </div>
        </div>
    @endforeach
</div>

<div class="text-center mt-16" data-aos="fade-up">
    <button id="loadMore" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
        Muat Lebih Banyak Proyek
        <svg class="w-5 h-5 ml-3 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </button>
</div>
