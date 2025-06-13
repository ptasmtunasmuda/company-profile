<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white pt-32 pb-24 overflow-hidden">
    @include('partials.shared.hero-background')

    <div class="absolute top-20 right-20 w-4 h-4 bg-blue-300 rounded-full animate-pulse"></div>
    <div class="absolute top-60 left-32 w-3 h-3 bg-purple-300 rounded-full animate-ping"></div>
    <div class="absolute bottom-40 right-40 w-2 h-2 bg-pink-300 rounded-full animate-bounce"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            @include('partials.portfolio-detail.breadcrumb', ['portfolio' => $portfolio])
            @include('partials.portfolio-detail.header-badge')
            @include('partials.portfolio-detail.header-title', ['portfolio' => $portfolio])
            @include('partials.portfolio-detail.header-client', ['portfolio' => $portfolio])
            @include('partials.portfolio-detail.header-description', ['portfolio' => $portfolio])
        </div>
    </div>
</section>
