<div class="flex flex-col sm:flex-row gap-4 mb-8">
    <a href="{{ $heroContent->ctaLink }}"
       class="group relative inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 rounded-2xl font-semibold text-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
        {{ $heroContent->ctaText }}
        @include('partials.icons.arrow-right')
    </a>
    <a href="{{ route('portfolio') }}"
       class="group inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white rounded-2xl font-semibold text-lg hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-sm">
        @include('partials.icons.portfolio')
        Lihat Portofolio
    </a>
</div>
