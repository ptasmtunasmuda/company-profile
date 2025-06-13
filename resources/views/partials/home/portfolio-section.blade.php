<section class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @include('partials.home.portfolio-header')
        @include('partials.home.portfolio', ['portfolios' => $portfolios])
        @include('partials.home.portfolio-cta')
    </div>
</section>
