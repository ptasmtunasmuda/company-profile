@if($portfolio->getFirstMediaUrl('featured_image'))
    <div class="mb-16 group" data-aos="fade-up">
        <div class="relative overflow-hidden rounded-3xl shadow-2xl transform group-hover:scale-105 transition-transform duration-700">
            <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'large') }}"
                 alt="{{ $portfolio->title }}"
                 class="w-full h-96 md:h-[500px] object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
    </div>
@endif
