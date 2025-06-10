@extends('layouts.app')

@section('title', 'Our Portfolio - Web & Mobile App Development Projects')
@section('description', 'Browse our portfolio of successful web and mobile app development projects. See how we\'ve helped businesses achieve their digital goals.')

@section('content')
<!-- Page Header -->
<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white pt-32 pb-24 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-10 left-10 w-96 h-96 bg-gradient-to-r from-primary-400 to-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
    <div class="absolute top-40 right-10 w-96 h-96 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-20 left-1/2 w-96 h-96 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>

    <!-- Floating Elements -->
    <div class="absolute top-20 right-20 w-4 h-4 bg-blue-300 rounded-full animate-pulse"></div>
    <div class="absolute top-60 left-32 w-3 h-3 bg-purple-300 rounded-full animate-ping"></div>
    <div class="absolute bottom-40 right-40 w-2 h-2 bg-pink-300 rounded-full animate-bounce"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <nav class="text-blue-200 mb-8" data-aos="fade-up">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors duration-300 hover:underline">Home</a>
                <span class="mx-3 text-blue-300">/</span>
                <span class="text-white font-medium">Portfolio</span>
            </nav>

            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-lg rounded-full text-sm font-semibold text-blue-100 mb-8 border border-white/20 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-5 h-5 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Premium Portfolio Collection
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="200">
                Our Portfolio
            </h1>
            <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 max-w-4xl mx-auto leading-relaxed font-light mb-12" data-aos="fade-up" data-aos-delay="300">
                Discover the <span class="font-semibold text-yellow-300">digital masterpieces</span> we've crafted for forward-thinking businesses
            </p>

            <!-- Stats Counter -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">50+</div>
                    <div class="text-blue-200 text-sm font-medium">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">25+</div>
                    <div class="text-blue-200 text-sm font-medium">Happy Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">3+</div>
                    <div class="text-blue-200 text-sm font-medium">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">99%</div>
                    <div class="text-blue-200 text-sm font-medium">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Navigation -->
<section class="py-12 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up">
            <button class="portfolio-filter active px-6 py-3 bg-primary-600 text-white rounded-full font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105 shadow-lg" data-filter="all">
                All Projects
            </button>
            <button class="portfolio-filter px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="web">
                Web Development
            </button>
            <button class="portfolio-filter px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="mobile">
                Mobile Apps
            </button>
            <button class="portfolio-filter px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="ecommerce">
                E-Commerce
            </button>
        </div>
    </div>
</section>

<!-- Featured Projects -->
@if($featuredPortfolios->count() > 0)
<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Enhanced Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-yellow-200 to-orange-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000"></div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="featured-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#featured-grid)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold mb-6 shadow-xl transform hover:scale-105 transition-transform duration-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Award-Winning Projects
            </div>
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-black text-gray-900 mb-8 leading-tight">
                Featured <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Masterpieces</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Exceptional projects that demonstrate our commitment to excellence and innovation</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-10">
            @foreach($featuredPortfolios as $portfolio)
                <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                    <!-- Card Background with Gradient Border -->
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <!-- Main Card -->
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20">
                        <!-- Featured Badge -->
                        <div class="absolute -top-4 -right-4 z-20">
                            <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12 group-hover:rotate-6 transition-transform duration-300">
                                ⭐ Featured
                            </div>
                        </div>

                        <!-- Image Section -->
                        @if($portfolio->getFirstMediaUrl('featured_image'))
                            <div class="relative overflow-hidden">
                                <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'large') }}"
                                     alt="{{ $portfolio->title }}"
                                     class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">

                                <!-- Overlay with Gradient -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                <!-- Quick Actions -->
                                <div class="absolute bottom-4 left-4 right-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500 opacity-0 group-hover:opacity-100">
                                    <div class="flex gap-3">
                                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                                           class="flex-1 bg-white/90 backdrop-blur-sm text-gray-900 px-4 py-2 rounded-xl font-semibold text-center hover:bg-white transition-colors duration-300">
                                            View Details
                                        </a>
                                        @if($portfolio->live_url ?? false)
                                            <a href="{{ $portfolio->live_url }}" target="_blank"
                                               class="bg-primary-600/90 backdrop-blur-sm text-white px-4 py-2 rounded-xl font-semibold hover:bg-primary-700 transition-colors duration-300">
                                                Live Demo
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Category Tag -->
                                <div class="absolute top-4 left-4">
                                    <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                        {{ $portfolio->category ?? 'Featured' }}
                                    </span>
                                </div>
                            </div>
                        @else
                            <div class="w-full h-64 bg-gradient-to-br from-primary-100 via-purple-100 to-pink-100 flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-primary-400/20 to-purple-400/20"></div>
                                <svg class="w-20 h-20 text-primary-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif

                        <!-- Content Section -->
                        <div class="p-8">
                            <div class="flex items-start justify-between mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                                    {{ $portfolio->title }}
                                </h3>
                                <div class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <svg class="w-6 h-6 text-primary-600 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>

                            @if($portfolio->client_name ?? false)
                                <div class="flex items-center mb-4">
                                    <div class="w-8 h-8 bg-gradient-to-br from-primary-400 to-purple-500 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <span class="text-primary-600 font-semibold">{{ $portfolio->client_name }}</span>
                                </div>
                            @endif

                            <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">{{ $portfolio->description }}</p>

                            <!-- Technologies -->
                            @if($portfolio->technologies ?? false)
                                <div class="flex flex-wrap gap-2 mb-6">
                                    @foreach(array_slice($portfolio->technologies, 0, 4) as $tech)
                                        <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                    @if(count($portfolio->technologies) > 4)
                                        <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium border border-gray-200">
                                            +{{ count($portfolio->technologies) - 4 }} more
                                        </span>
                                    @endif
                                </div>
                            @endif

                            <!-- Action Button -->
                            <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                               class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Explore Project
                                <svg class="w-5 h-5 ml-2 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- All Projects Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-3">
        <svg class="w-full h-full" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="all-projects-pattern" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="2" fill="currentColor"/>
                    <circle cx="10" cy="10" r="1" fill="currentColor"/>
                    <circle cx="50" cy="50" r="1" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#all-projects-pattern)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 rounded-full text-sm font-semibold mb-6 border border-gray-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Complete Collection
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                All <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Projects</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Browse through our complete portfolio showcasing diverse projects across industries</p>
        </div>

        @if($portfolios->count() > 0)
            <div class="portfolio-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
                @foreach($portfolios as $portfolio)
                    <div class="portfolio-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
                         data-category="{{ strtolower($portfolio->category ?? 'other') }}"
                         data-aos="fade-up"
                         data-aos-delay="{{ ($loop->index % 6) * 100 }}">

                        <!-- Subtle Gradient Background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-50/50 to-purple-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                        <div class="relative z-10">
                            <!-- Image Section -->
                            @if($portfolio->getFirstMediaUrl('featured_image'))
                                <div class="relative overflow-hidden rounded-t-3xl">
                                    <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'thumb') }}"
                                         alt="{{ $portfolio->title }}"
                                         class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700">

                                    <!-- Overlay -->
                                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-500"></div>

                                    <!-- Quick View Button -->
                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500">
                                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                                           class="bg-white/90 backdrop-blur-sm text-gray-900 px-6 py-3 rounded-xl font-semibold transform scale-95 group-hover:scale-100 transition-transform duration-300 shadow-lg">
                                            Quick View
                                        </a>
                                    </div>

                                    <!-- Category Badge -->
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                            {{ ucfirst($portfolio->category ?? 'Project') }}
                                        </span>
                                    </div>
                                </div>
                            @else
                                <div class="w-full h-56 bg-gradient-to-br from-gray-100 to-gray-200 rounded-t-3xl flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif

                            <!-- Content Section -->
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                                    {{ $portfolio->title }}
                                </h3>

                                @if($portfolio->client_name ?? false)
                                    <p class="text-sm text-primary-600 font-medium mb-3 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        {{ $portfolio->client_name }}
                                    </p>
                                @endif

                                <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">{{ Str::limit($portfolio->description, 120) }}</p>

                                <!-- Technologies -->
                                @if($portfolio->technologies ?? false)
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach(array_slice($portfolio->technologies, 0, 3) as $tech)
                                            <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                        @if(count($portfolio->technologies) > 3)
                                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">
                                                +{{ count($portfolio->technologies) - 3 }}
                                            </span>
                                        @endif
                                    </div>
                                @endif

                                <!-- View Details Link -->
                                <div class="flex items-center justify-between">
                                    <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                                       class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                        <span>View Details</span>
                                        <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>

                                    @if($portfolio->live_url ?? false)
                                        <a href="{{ $portfolio->live_url }}" target="_blank"
                                           class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="View Live Site">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h 10a2 2 0 002-2V8a2 2 0 00-2-2h-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16" data-aos="fade-up">
                <button id="loadMore" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Load More Projects
                    <svg class="w-5 h-5 ml-3 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
            </div>

            <!-- Simple Pagination -->
            <div class="mt-16 flex justify-center" data-aos="fade-up">
                <div class="flex space-x-2">
                    {{-- Previous Page Link --}}
                    @if ($portfolios->onFirstPage())
                        <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-lg cursor-not-allowed">
                            Previous
                        </span>
                    @else
                        <a href="{{ $portfolios->previousPageUrl() }}"
                            class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                            Previous
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @if($portfolios->lastPage() > 1)
                        @php
                            $start = max($portfolios->currentPage() - 2, 1);
                            $end = min($start + 4, $portfolios->lastPage());
                            $start = max($end - 4, 1);
                        @endphp

                        @if($start > 1)
                            <a href="{{ $portfolios->url(1) }}"
                                class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                                1
                            </a>
                            @if($start > 2)
                                <span class="px-4 py-2 text-gray-500">...</span>
                            @endif
                        @endif

                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $portfolios->currentPage())
                                <span class="px-4 py-2 bg-primary-600 text-white rounded-lg font-semibold shadow-md">
                                    {{ $i }}
                                </span>
                            @else
                                <a href="{{ $portfolios->url($i) }}"
                                    class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                                    {{ $i }}
                                </a>
                            @endif
                        @endfor

                        @if($end < $portfolios->lastPage())
                            @if($end < $portfolios->lastPage() - 1)
                                <span class="px-4 py-2 text-gray-500">...</span>
                            @endif
                            <a href="{{ $portfolios->url($portfolios->lastPage()) }}"
                                class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                                {{ $portfolios->lastPage() }}
                            </a>
                        @endif
                    @endif

                    {{-- Next Page Link --}}
                    @if ($portfolios->hasMorePages())
                        <a href="{{ $portfolios->nextPageUrl() }}"
                            class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                            Next
                        </a>
                    @else
                        <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-lg cursor-not-allowed">
                            Next
                        </span>
                    @endif
                </div>
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-24">
                <div class="relative mb-12">
                    <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full mx-auto flex items-center justify-center shadow-xl">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <!-- Floating elements around empty state -->
                    <div class="absolute top-0 left-1/4 w-4 h-4 bg-primary-200 rounded-full animate-bounce animation-delay-1000"></div>
                    <div class="absolute top-1/4 right-1/4 w-3 h-3 bg-purple-200 rounded-full animate-pulse"></div>
                    <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-pink-200 rounded-full animate-ping"></div>
                </div>

                <h3 class="text-3xl font-bold text-gray-900 mb-6">Amazing Projects Coming Soon</h3>
                <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto leading-relaxed">
                    We're currently crafting extraordinary digital experiences for our clients.
                    Check back soon to see our latest innovations!
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('contact') }}"
                        class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-bold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Start Your Project
                        <svg class="w-6 h-6 ml-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                    <a href="{{ route('services') }}"
                        class="group inline-flex items-center px-8 py-4 border-2 border-primary-600 text-primary-600 rounded-2xl font-bold hover:bg-primary-600 hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                        </svg>
                        Our Services
                    </a>
                </div>
            </div>
        @endif
    </div>
    </section>

    <!-- Process Section -->
    <section class="py-24 bg-gradient-to-br from-gray-900 via-primary-900 to-purple-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-primary-400/30 to-blue-400/30 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-400/30 to-pink-400/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-lg rounded-full text-sm font-bold text-white mb-6 border border-white/20">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                Our Proven Process
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">
                From <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Concept</span> to Reality
            </h2>
            <p class="text-xl text-blue-100 max-w-4xl mx-auto leading-relaxed">Every project follows our meticulously crafted process to ensure exceptional results</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Process Step 1 -->
            <div class="group text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="relative mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-primary-500 to-blue-600 rounded-full mx-auto flex items-center justify-center shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-110 border-4 border-white/20">
                        <span class="text-white font-black text-3xl">1</span>
                    </div>
                    <!-- Connector Line -->
                    <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-white/30"></div>
                    <!-- Floating Elements -->
                    <div class="absolute -top-2 -right-2 w-4 h-4 bg-yellow-400 rounded-full animate-ping"></div>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-yellow-400 transition-colors duration-300">Discovery & Strategy</h3>
                <p class="text-blue-200 leading-relaxed">Deep dive into your vision, goals, and requirements to create a comprehensive project roadmap</p>
            </div>

            <!-- Process Step 2 -->
            <div class="group text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="relative mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full mx-auto flex items-center justify-center shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-110 border-4 border-white/20">
                        <span class="text-white font-black text-3xl">2</span>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-white/30"></div>
                    <div class="absolute -top-2 -left-2 w-3 h-3 bg-green-400 rounded-full animate-bounce"></div>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-green-400 transition-colors duration-300">Design & Prototype</h3>
                <p class="text-blue-200 leading-relaxed">Create stunning designs and interactive prototypes that bring your vision to life</p>
            </div>

            <!-- Process Step 3 -->
            <div class="group text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="relative mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full mx-auto flex items-center justify-center shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-110 border-4 border-white/20">
                        <span class="text-white font-black text-3xl">3</span>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-white/30"></div>
                    <div class="absolute -bottom-2 -right-2 w-2 h-2 bg-purple-400 rounded-full animate-pulse"></div>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-purple-400 transition-colors duration-300">Development & Testing</h3>
                <p class="text-blue-200 leading-relaxed">Transform designs into powerful, scalable applications with rigorous quality assurance</p>
            </div>

            <!-- Process Step 4 -->
            <div class="group text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="relative mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-orange-500 to-red-600 rounded-full mx-auto flex items-center justify-center shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-110 border-4 border-white/20">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="absolute -top-2 -left-2 w-5 h-5 bg-orange-400 rounded-full animate-ping"></div>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-orange-400 transition-colors duration-300">Launch & Support</h3>
                <p class="text-blue-200 leading-relaxed">Seamless deployment and ongoing support to ensure your project's continued success</p>
            </div>
        </div>
    </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="testimonial-pattern" width="50" height="50" patternUnits="userSpaceOnUse">
                    <path d="M25 25m-10 0a10 10 0 1 0 20 0a10 10 0 1 0 -20 0" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#testimonial-pattern)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"></path>
                </svg>
                Client Testimonials
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                What Our <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Clients Say</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Don't just take our word for it - hear from the businesses we've helped transform</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        @endfor
                    </div>
                </div>
                <blockquote class="text-gray-600 leading-relaxed mb-6 italic">
                    "The team delivered an exceptional e-commerce platform that exceeded our expectations. Our sales increased by 200% within the first quarter after launch."
                </blockquote>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-400 to-purple-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">JS</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">John Smith</div>
                        <div class="text-sm text-gray-500">CEO, TechCorp</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        @endfor
                    </div>
                </div>
                <blockquote class="text-gray-600 leading-relaxed mb-6 italic">
                    "Outstanding mobile app development! The user experience is flawless and our customer engagement has dramatically improved."
                </blockquote>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">MJ</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Maria Johnson</div>
                        <div class="text-sm text-gray-500">Founder, StartupXYZ</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        @endfor
                    </div>
                </div>
                <blockquote class="text-gray-600 leading-relaxed mb-6 italic">
                    "Professional, creative, and reliable. They transformed our vision into a beautiful, functional website that drives real results."
                </blockquote>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">AB</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Alex Brown</div>
                        <div class="text-sm text-gray-500">Director, Creative Agency</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Enhanced CTA Section -->
    <section class="py-24 bg-gradient-to-br from-primary-600 via-purple-700 to-primary-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute top-10 left-10 w-96 h-96 bg-gradient-to-r from-white/10 to-blue-400/20 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-r from-yellow-400/20 to-pink-400/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-purple-400/20 to-blue-400/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <!-- Floating particles -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-1/4 w-2 h-2 bg-white/30 rounded-full animate-ping"></div>
        <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-yellow-300/40 rounded-full animate-bounce"></div>
        <div class="absolute bottom-1/3 left-1/3 w-4 h-4 bg-blue-300/30 rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 right-1/3 w-2 h-2 bg-pink-300/40 rounded-full animate-ping animation-delay-2000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-xl rounded-full text-sm font-bold text-white mb-8 border border-white/30 shadow-2xl">
                <svg class="w-6 h-6 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Ready to Transform Your Business?
            </div>

            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 leading-tight">
                Let's Create Your
                <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-pink-500 bg-clip-text text-transparent">
                    Success Story
                </span>
            </h2>

            <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 mb-12 max-w-5xl mx-auto leading-relaxed font-light">
                Join the ranks of successful businesses that have transformed their digital presence with our innovative solutions
            </p>

            <div class="flex flex-col sm:flex-row gap-8 justify-center items-center mb-16">
                <a href="{{ route('contact') }}"
                    class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-2xl font-black text-xl hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl hover:shadow-3xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="relative z-10">Start Your Project Today</span>
                    <svg class="relative z-10 w-6 h-6 ml-3 transform group-hover:translate-x-2 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>

                <a href="{{ route('services') }}"
                    class="group inline-flex items-center px-10 py-5 border-3 border-white/40 text-white rounded-2xl font-black text-xl hover:bg-white/10 hover:border-white backdrop-blur-sm transition-all duration-500">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                    </svg>
                    Explore Our Services
                </a>
            </div>

            <!-- Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="flex flex-col items-center text-blue-100">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 border border-white/20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Email Us</h4>
                    <p class="text-center">{{ \App\Models\Setting::get('contact_email', 'info@company.com') }}</p>
                </div>

                <div class="flex flex-col items-center text-blue-100">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 border border-white/20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Call Us</h4>
                    <p class="text-center">{{ \App\Models\Setting::get('contact_phone', '+62 123-456-7890') }}</p>
                </div>

                <div class="flex flex-col items-center text-blue-100">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 border border-white/20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Response Time</h4>
                    <p class="text-center">Within 24 hours</p>
                </div>
            </div>
        </div>
    </div>
    </section>

    @push('styles')
    <style>
    /* Enhanced Animations */
    @keyframes blob {
    0% {
        transform: translate(0px, 0px) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
        transform: translate(0px, 0px) scale(1);
    }
    }

    @keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
    }

    @keyframes glow {
    0%, 100% {
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
    }
    50% {
        box-shadow: 0 0 40px rgba(59, 130, 246, 0.8), 0 0 60px rgba(59, 130, 246, 0.3);
    }
    }

    .animate-blob {
    animation: blob 7s infinite;
    }

    .animate-float {
    animation: float 6s ease-in-out infinite;
    }

    .animate-glow {
    animation: glow 3s ease-in-out infinite;
    }

    .animation-delay-1000 {
    animation-delay: 1s;
    }

    .animation-delay-2000 {
    animation-delay: 2s;
    }

    .animation-delay-4000 {
    animation-delay: 4s;
    }

    /* Text Gradients */
    .text-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    }

    /* Enhanced Card Hover Effects */
    .portfolio-item {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .portfolio-item:hover {
    transform: translateY(-12px) rotateX(5deg);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    /* Filter Buttons */
    .portfolio-filter {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .portfolio-filter.active {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transform: scale(1.05);
    box-shadow: 0 10px 25px -5px rgba(102, 126, 234, 0.4);
    }

    /* Line Clamp Utilities */
    .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    }

    .line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    }

    /* Scroll Reveal Animation */
    @keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
    }

    .slide-in-up {
    animation: slideInUp 0.6s ease-out forwards;
    }

    /* Enhanced Hover States */
    .hover-lift {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .hover-lift:hover {
    transform: translateY(-8px) scale(1.02);
    }

    /* Glassmorphism Effect */
    .glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Enhanced Button Styles */
    .btn-primary-enhanced {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    }

    .btn-primary-enhanced::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
    }

    .btn-primary-enhanced:hover::before {
    left: 100%;
    }

    .btn-primary-enhanced:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(102, 126, 234, 0.4);
    }

    /* Loading Animation */
    @keyframes shimmer {
    0% {
        background-position: -200px 0;
    }
    100% {
        background-position: calc(200px + 100%) 0;
    }
    }

    .loading-shimmer {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200px 100%;
    animation: shimmer 1.5s infinite;
    }

    /* Responsive Design Enhancements */
    @media (max-width: 768px) {
    .portfolio-item:hover {
        transform: translateY(-8px);
    }
    }

    /* Print Styles */
    @media print {
    .portfolio-item {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #e5e7eb;
    }
    }
    </style>
    @endpush

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Portfolio Filter Functionality
    const filterButtons = document.querySelectorAll('.portfolio-filter');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');

            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Filter portfolio items
            portfolioItems.forEach(item => {
                const category = item.getAttribute('data-category');

                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                    item.style.animation = 'slideInUp 0.6s ease-out forwards';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Load More Functionality
    const loadMoreBtn = document.getElementById('loadMore');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Add loading state
            this.innerHTML = `
                <svg class="animate-spin w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Loading More Projects...
            `;

            // Simulate loading delay
            setTimeout(() => {
                this.innerHTML = 'Load More Projects <svg class="w-5 h-5 ml-3 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>';
            }, 2000);
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe portfolio items for scroll animations
    portfolioItems.forEach(item => {
        observer.observe(item);
    });

    // Counter animation for stats
    const counters = document.querySelectorAll('[data-aos="fade-up"][data-aos-delay="400"] .text-3xl');
    const animateCounter = (counter) => {
        const target = parseInt(counter.textContent.replace(/\D/g, ''));
        const increment = target / 100;
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current) + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('%') ? '%' : '');
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('%') ? '%' : '');
            }
        };

        updateCounter();
    };

    // Trigger counter animation when stats section is visible
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                counters.forEach(counter => animateCounter(counter));
                statsObserver.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('[data-aos-delay="400"]');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Image lazy loading
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('loading-shimmer');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => {
        img.classList.add('loading-shimmer');
        imageObserver.observe(img);
    });

    // Enhanced hover effects for portfolio items
    portfolioItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) rotateX(5deg)';
            this.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotateX(0)';
            this.style.boxShadow = '';
        });
    });

    // Parallax effect for background elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelectorAll('.animate-blob');

        parallax.forEach(element => {
            const speed = 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
    });

    // Service Worker for offline capability
    if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}
</script>
@endpush
@endsection
