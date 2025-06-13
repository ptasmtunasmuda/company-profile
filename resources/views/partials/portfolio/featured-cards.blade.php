<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-10">
    @foreach($featuredPortfolios as $portfolio)
        <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

            <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20">
                <div class="absolute -top-4 -right-4 z-20">
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12 group-hover:rotate-6 transition-transform duration-300">
                        ⭐ Unggulan
                    </div>
                </div>

                @include('partials.portfolio.featured-card-image', ['portfolio' => $portfolio])
                @include('partials.portfolio.featured-card-content', ['portfolio' => $portfolio])
            </div>
        </div>
    @endforeach
</div>
