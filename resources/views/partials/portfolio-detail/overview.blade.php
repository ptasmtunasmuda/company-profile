<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <div class="lg:col-span-2">
                @include('partials.portfolio-detail.main-content', ['portfolio' => $portfolio])
            </div>
            <div class="lg:col-span-1">
                @include('partials.portfolio-detail.sidebar', ['portfolio' => $portfolio])
            </div>
        </div>
    </div>
</section>
