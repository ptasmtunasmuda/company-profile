<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            @include('partials.home.about-image', ['stats' => $stats])
            @include('partials.home.about-content', ['aboutContent' => $aboutContent])
        </div>
    </div>
</section>
