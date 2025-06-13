<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @include('partials.portfolio.grid-header')

        @if($portfolios->count() > 0)
            @include('partials.portfolio.grid-items', ['portfolios' => $portfolios])
            @include('partials.portfolio.grid-pagination', ['portfolios' => $portfolios])
        @else
            @include('partials.portfolio.grid-empty')
        @endif
    </div>
</section>
