<div data-aos="fade-right" class="text-center lg:text-left">
    <!-- Badge -->
    <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium text-blue-100 mb-6">
        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
        Available for new projects
    </div>

    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
        <span class="text-white">{{ $heroContent->title }}</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed max-w-2xl">
        {{ $heroContent->subtitle }}
    </p>

    <!-- CTA Buttons -->
    @include('partials.home.hero-cta-buttons', ['heroContent' => $heroContent])

    <!-- Stats -->
    @include('partials.shared.hero-stats', ['stats' => $stats])
</div>
