@extends('layouts.app')

@section('title', 'Our Portfolio - Web & Mobile App Development Projects')
@section('description', 'Browse our portfolio of successful web and mobile app development projects. See how we\'ve helped businesses achieve their digital goals.')

@section('content')
<!-- Page Header -->
<section class="bg-gray-900 text-white pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Our Portfolio</h1>
            <p class="text-xl text-gray-300 mb-4" data-aos="fade-up" data-aos-delay="100">Showcasing our best work and successful client projects</p>
            <nav class="text-gray-300" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                <span class="mx-2">/</span>
                <span class="text-white">Portfolio</span>
            </nav>
        </div>
    </div>
</section>

<!-- Featured Projects -->
@if($featuredPortfolios->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Projects</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our most successful and innovative projects that showcase our expertise and creativity.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @foreach($featuredPortfolios as $portfolio)
                <div class="bg-white rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    @if($portfolio->getFirstMediaUrl('featured_image'))
                        <div class="relative overflow-hidden group">
                            <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'large') }}"
                                 alt="{{ $portfolio->title }}"
                                 class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 flex items-center justify-center">
                                <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                                   class="bg-white text-primary-600 px-4 py-2 rounded-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-4 group-hover:translate-y-0">
                                    View Project
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    @endif

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-gray-900">{{ $portfolio->title }}</h3>
                            <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full font-semibold">Featured</span>
                        </div>

                        @if($portfolio->client_name)
                            <p class="text-sm text-gray-500 mb-3">{{ $portfolio->client_name }}</p>
                        @endif

                        <p class="text-gray-600 mb-4">{{ $portfolio->description }}</p>

                        @if($portfolio->technologies)
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach(array_slice($portfolio->technologies, 0, 3) as $tech)
                                    <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full">{{ $tech }}</span>
                                @endforeach
                                @if(count($portfolio->technologies) > 3)
                                    <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full">+{{ count($portfolio->technologies) - 3 }} more</span>
                                @endif
                            </div>
                        @endif

                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                           class="text-primary-600 font-semibold hover:text-primary-700 transition-colors flex items-center">
                            View Details
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- All Projects -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">All Projects</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Browse through our complete portfolio of successful projects.</p>
        </div>

        @if($portfolios->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($portfolios as $portfolio)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                        @if($portfolio->getFirstMediaUrl('featured_image'))
                            <div class="relative overflow-hidden group">
                                <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'thumb') }}"
                                     alt="{{ $portfolio->title }}"
                                     class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 flex items-center justify-center">
                                    <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                                       class="bg-white text-primary-600 px-3 py-1 rounded text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        View Project
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif

                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $portfolio->title }}</h3>

                            @if($portfolio->client_name)
                                <p class="text-sm text-gray-500 mb-2">{{ $portfolio->client_name }}</p>
                            @endif

                            <p class="text-gray-600 mb-4 text-sm">{{ Str::limit($portfolio->description, 100) }}</p>

                            @if($portfolio->technologies)
                                <div class="flex flex-wrap gap-1 mb-4">
                                    @foreach(array_slice($portfolio->technologies, 0, 3) as $tech)
                                        <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            @endif

                            <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                               class="text-primary-600 font-semibold hover:text-primary-700 transition-colors text-sm">
                                View Details →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12" data-aos="fade-up">
                {{ $portfolios->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No Projects Yet</h3>
                <p class="text-gray-600">We're currently working on exciting new projects. Check back soon!</p>
            </div>
        @endif
    </div>
</section>
@endsection
