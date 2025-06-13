<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($relatedPortfolios as $related)
        <div class="group relative bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2 border border-white/20" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-400/20 via-purple-500/20 to-pink-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <div class="relative z-10">
                @include('partials.portfolio-detail.related-item-image', ['related' => $related])
                @include('partials.portfolio-detail.related-item-content', ['related' => $related])
            </div>
        </div>
    @endforeach
</div>
