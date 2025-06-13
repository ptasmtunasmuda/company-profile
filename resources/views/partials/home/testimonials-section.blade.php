<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @include('partials.home.testimonials-header')
        @include('partials.home.testimonials', ['testimonials' => $testimonials])
    </div>
</section>
