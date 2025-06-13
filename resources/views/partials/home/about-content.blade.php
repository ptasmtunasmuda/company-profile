<div data-aos="fade-left" class="space-y-8">
    <div>
        <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
            @include('partials.icons.info')
            {{ $aboutContent->subtitle }}
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">{{ $aboutContent->title }}</h2>
        <p class="text-lg text-gray-600 leading-relaxed">{{ $aboutContent->description }}</p>
    </div>

    @include('partials.home.about-features')

    <!-- CTA Button -->
    <div class="pt-4">
        <a href="{{ route('about') }}"
            class="inline-flex items-center px-6 py-3 bg-primary-600 text-white rounded-xl font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105">
            Pelajari Lebih Lanjut Tentang Kami
            @include('partials.icons.arrow-right')
        </a>
    </div>
</div>
