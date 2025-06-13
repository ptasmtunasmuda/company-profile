<section class="relative bg-gradient-to-br from-primary-600 to-primary-900 text-white pt-32 pb-20 overflow-hidden">
    @include('partials.shared.hero-background')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[80vh]">
            @include('partials.home.hero-content', ['heroContent' => $heroContent, 'stats' => $stats])
            @include('partials.home.hero-visual')
        </div>
    </div>
</section>
