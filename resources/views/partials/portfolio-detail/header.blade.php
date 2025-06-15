<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white pt-32 pb-24 overflow-hidden">
    @include('partials.shared.hero-background')

    <div class="absolute top-20 right-20 w-4 h-4 bg-blue-300 rounded-full animate-pulse"></div>
    <div class="absolute top-60 left-32 w-3 h-3 bg-purple-300 rounded-full animate-ping"></div>
    <div class="absolute bottom-40 right-40 w-2 h-2 bg-pink-300 rounded-full animate-bounce"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <!-- Breadcrumb -->
            <nav class="text-blue-200 mb-8" data-aos="fade-up">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors duration-300 hover:underline">Home</a>
                <span class="mx-3 text-blue-300">/</span>
                <a href="{{ route('portfolio') }}" class="hover:text-white transition-colors duration-300 hover:underline">Portfolio</a>
                <span class="mx-3 text-blue-300">/</span>
                <span class="text-white font-medium">{{ $portfolio->title }}</span>
            </nav>

            <!-- Badge -->
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-lg rounded-full text-sm font-semibold text-blue-100 mb-8 border border-white/20 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-5 h-5 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Project Case Study
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="200">
                {{ $portfolio->title }}
            </h1>

            <!-- Client -->
            @if($portfolio->client_name)
                <div class="flex items-center justify-center mb-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                        <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <span class="text-blue-100 font-semibold">{{ $portfolio->client_name }}</span>
                    </div>
                </div>
            @endif

            <!-- Description -->
            <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="400">
                {{ $portfolio->description }}
            </p>
        </div>
    </div>
</section>
