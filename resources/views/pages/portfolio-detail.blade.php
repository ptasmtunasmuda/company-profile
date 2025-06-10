@extends('layouts.app')

@section('title', $portfolio->title . ' - Portfolio')
@section('description', $portfolio->description)

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
                <a href="{{ route('portfolio') }}" class="hover:text-white transition-colors duration-300 hover:underline">Portfolio</a>
                <span class="mx-3 text-blue-300">/</span>
                <span class="text-white font-medium">{{ $portfolio->title }}</span>
            </nav>

            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-lg rounded-full text-sm font-semibold text-blue-100 mb-8 border border-white/20 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-5 h-5 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Project Case Study
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="200">
                {{ $portfolio->title }}
            </h1>

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

            <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="400">
                {{ $portfolio->description }}
            </p>
        </div>
    </div>
</section>

<!-- Project Overview -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Featured Image -->
                @if($portfolio->getFirstMediaUrl('featured_image'))
                    <div class="mb-16 group" data-aos="fade-up">
                        <div class="relative overflow-hidden rounded-3xl shadow-2xl transform group-hover:scale-105 transition-transform duration-700">
                            <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'large') }}"
                                 alt="{{ $portfolio->title }}"
                                 class="w-full h-96 md:h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                @endif

                <!-- Project Description -->
                <div class="mb-16" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Project Overview</h2>
                    </div>

                    <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100 mb-8">
                        <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">{{ $portfolio->description }}</p>

                        <div class="prose prose-lg prose-primary max-w-none">
                            {!! $portfolio->content !!}
                        </div>
                    </div>
                </div>

                <!-- Project Gallery -->
                @if($portfolio->getMedia('gallery')->count() > 0)
                    <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Project Gallery</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($portfolio->getMedia('gallery') as $image)
                                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer transform hover:-translate-y-2"
                                     onclick="openImageModal('{{ $image->getUrl() }}', '{{ $portfolio->title }}')">
                                    <img src="{{ $image->getUrl('thumb') }}"
                                         alt="{{ $portfolio->title }}"
                                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                        <div class="bg-white/90 backdrop-blur-sm text-gray-900 p-3 rounded-full shadow-lg transform scale-90 group-hover:scale-100 transition-transform duration-300">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Project Features -->
                <div class="mb-16" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Key Features</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-gray-900">High Performance</h3>
                            </div>
                            <p class="text-gray-600 text-sm">Optimized for speed and efficiency with modern development practices.</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-gray-900">Responsive Design</h3>
                            </div>
                            <p class="text-gray-600 text-sm">Perfect experience across all devices and screen sizes.</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-gray-900">Security Focused</h3>
                            </div>
                            <p class="text-gray-600 text-sm">Built with security best practices and modern encryption.</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-pink-500 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-gray-900">User-Friendly</h3>
                            </div>
                            <p class="text-gray-600 text-sm">Intuitive interface designed for optimal user experience.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-8">
                    <!-- Project Details Card -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-8 border border-gray-100" data-aos="fade-left">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-purple-600 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Project Details</h3>
                        </div>

                        <div class="space-y-6">
                            @if($portfolio->client_name)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Client</dt>
                                        <dd class="text-gray-900 font-semibold">{{ $portfolio->client_name }}</dd>
                                    </div>
                                </div>
                            @endif

                            @if($portfolio->completed_at)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-green-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Completion Date</dt>
                                        <dd class="text-gray-900 font-semibold">{{ $portfolio->completed_at->format('F Y') }}</dd>
                                    </div>
                                </div>
                            @endif

                            @if($portfolio->project_url)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-purple-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500 mb-1">Live URL</dt>
                                        <dd>
                                            <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener"
                                               class="inline-flex items-center px-3 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                                                Visit Project
                                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                                </svg>
                                            </a>
                                        </dd>
                                    </div>
                                </div>
                            @endif

                            @if($portfolio->technologies)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-orange-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <dt class="text-sm font-medium text-gray-500 mb-2">Technologies Used</dt>
                                        <dd>
                                            <div class="flex flex-wrap gap-2">
                                                @foreach($portfolio->technologies as $tech)
                                                    <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">
                                                        {{ $tech }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </dd>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- CTA Card -->
                    <div class="bg-gradient-to-br from-primary-600 to-purple-700 rounded-3xl shadow-xl p-8 text-white" data-aos="fade-left" data-aos-delay="100">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold mb-3">Interested in Similar Project?</h4>
                            <p class="text-blue-100 mb-6 text-sm">Let's discuss how we can create something amazing for your business.</p>
                            <a href="{{ route('contact') }}"
                               class="group inline-flex items-center px-6 py-3 bg-white text-primary-600 rounded-xl font-bold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                Start Your Project
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-8 border border-gray-100" data-aos="fade-left" data-aos-delay="200">
                        <h4 class="text-lg font-bold text-gray-900 mb-6">Project Impact</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl">
                                <div class="text-2xl font-bold text-primary-600 mb-1">100%</div>
                                <div class="text-xs text-gray-600">Client Satisfaction</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl">
                                <div class="text-2xl font-bold text-green-600 mb-1">3x</div>
                                <div class="text-xs text-gray-600">Performance Boost</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-red-50 rounded-xl">
                                <div class="text-2xl font-bold text-orange-600 mb-1">24/7</div>
                                <div class="text-xs text-gray-600">Uptime</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl">
                                <div class="text-2xl font-bold text-purple-600 mb-1">99%</div>
                                <div class="text-xs text-gray-600">Load Speed</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Related Projects -->
    @if($relatedPortfolios->count() > 0)
    <section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"></div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="related-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#related-grid)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                More Projects
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Related <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Projects</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Check out some of our other successful projects in similar domains</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($relatedPortfolios as $related)
                <div class="group relative bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2 border border-white/20" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <!-- Gradient Border Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400/20 via-purple-500/20 to-pink-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative z-10">
                        @if($related->getFirstMediaUrl('featured_image'))
                            <div class="relative overflow-hidden rounded-t-3xl">
                                <img src="{{ $related->getFirstMediaUrl('featured_image', 'thumb') }}"
                                        alt="{{ $related->title }}"
                                        class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">

                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                <!-- Quick View Button -->
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500">
                                    <a href="{{ route('portfolio.detail', $related->slug) }}"
                                        class="bg-white/90 backdrop-blur-sm text-gray-900 px-4 py-2 rounded-xl font-semibold transform scale-95 group-hover:scale-100 transition-transform duration-300 shadow-lg">
                                        View Project
                                    </a>
                                </div>

                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                        {{ ucfirst($related->category ?? 'Project') }}
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

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                                {{ $related->title }}
                            </h3>

                            @if($related->client_name)
                                <p class="text-sm text-primary-600 font-medium mb-3 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    {{ $related->client_name }}
                                </p>
                            @endif

                            <p class="text-gray-600 mb-6 leading-relaxed">{{ Str::limit($related->description, 100) }}</p>

                            <div class="flex items-center justify-between">
                                <a href="{{ route('portfolio.detail', $related->slug) }}"
                                    class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                    <span>View Project</span>
                                    <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>

                                @if($related->project_url)
                                    <a href="{{ $related->project_url }}" target="_blank"
                                        class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="View Live Site">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V8a2 2 0 00-2-2h-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- View All Projects Button -->
        <div class="text-center mt-16" data-aos="fade-up">
            <a href="{{ route('portfolio') }}"
                class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                View All Projects
                <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
    </section>
    @endif

    <!-- CTA Section -->
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
                Ready to Start Your Project?
            </div>

            <h2 class="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-8 leading-tight">
                Let's Build Something
                <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-pink-500 bg-clip-text text-transparent">
                    Extraordinary Together
                </span>
            </h2>

            <p class="text-xl md:text-2xl text-blue-100 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                Ready to transform your vision into reality? Let's discuss your project and create something amazing.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact') }}"
                    class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-2xl font-black text-xl hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl hover:shadow-3xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="relative z-10">Start Your Project</span>
                    <svg class="relative z-10 w-6 h-6 ml-3 transform group-hover:translate-x-2 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>

                <a href="{{ route('portfolio') }}"
                    class="group inline-flex items-center px-10 py-5 border-3 border-white/40 text-white rounded-2xl font-black text-xl hover:bg-white/10 hover:border-white backdrop-blur-sm transition-all duration-500">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    View More Projects
                </a>
            </div>
        </div>
    </div>
    </section>

    <!-- Enhanced Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black/90 backdrop-blur-sm flex items-center justify-center z-50 hidden opacity-0 transition-opacity duration-300">
    <div class="relative max-w-6xl max-h-full p-4 w-full">
        <!-- Close Button -->
        <button onclick="closeImageModal()" class="absolute top-6 right-6 z-20 w-12 h-12 bg-white/10 backdrop-blur-sm text-white hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Image Container -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-4 shadow-2xl border border-white/10">
            <img id="modalImage" src="" alt="" class="max-w-full max-h-[80vh] object-contain rounded-xl mx-auto">
        </div>

        <!-- Navigation Hints -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white/60 text-sm">
            <span class="bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full">Press ESC to close</span>
        </div>
    </div>
    </div>

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

    .animate-blob {
    animation: blob 7s infinite;
    }

    .animation-delay-2000 {
    animation-delay: 2s;
    }

    .animation-delay-4000 {
    animation-delay: 4s;
    }

    /* Custom prose styling */
    .prose-primary {
    --tw-prose-links: theme('colors.primary.600');
    --tw-prose-headings: theme('colors.gray.900');
    }

    .prose-primary h1,
    .prose-primary h2,
    .prose-primary h3,
    .prose-primary h4 {
    color: var(--tw-prose-headings);
    font-weight: 700;
    }

    .prose-primary h2 {
    font-size: 1.875rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
    }

    .prose-primary h3 {
    font-size: 1.5rem;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
    }

    .prose-primary p {
    margin-bottom: 1.25rem;
    line-height: 1.75;
    }

    .prose-primary ul {
    margin: 1.25rem 0;
    padding-left: 1.625rem;
    }

    .prose-primary li {
    margin: 0.5rem 0;
    }

    .prose-primary strong {
    color: var(--tw-prose-headings);
    font-weight: 600;
    }

    /* Modal Animation */
    .modal-enter {
    opacity: 0;
    transform: scale(0.9);
    }

    .modal-enter-active {
    opacity: 1;
    transform: scale(1);
    transition: opacity 0.3s ease, transform 0.3s ease;
    }

    /* Image Gallery Hover Effects */
    .gallery-item {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-item:hover {
    transform: translateY(-8px) scale(1.02);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
    .gallery-item:hover {
        transform: translateY(-4px) scale(1.01);
    }
    }

    /* Scroll Animations */
    @keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
    }

    .slide-in-up {
    animation: slideInUp 0.6s ease-out forwards;
    }

    /* Print Styles */
    @media print {
    .sticky {
        position: static;
    }

    .shadow-lg,
    .shadow-xl,
    .shadow-2xl {
        box-shadow: none;
        border: 1px solid #e5e7eb;
    }
    }
    </style>
    @endpush

    @push('scripts')
    <script>
    function openImageModal(imageUrl, title) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');

    modalImage.src = imageUrl;
    modalImage.alt = title;

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';

    // Animate modal entrance
    setTimeout(() => {
        modal.classList.remove('opacity-0');
    }, 10);
    }

    function closeImageModal() {
    const modal = document.getElementById('imageModal');

    modal.classList.add('opacity-0');

    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
    }

    // Close modal when clicking outside the image
    document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeImageModal();
    }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
    });

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

    // Intersection Observer for scroll animations
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

    // Observe elements for scroll animations
    document.querySelectorAll('[data-aos]').forEach(el => {
    observer.observe(el);
    });

    // Copy to clipboard functionality for project URL
    function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        // Show success message
        const toast = document.createElement('div');
        toast.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
        toast.textContent = 'URL copied to clipboard!';
        document.body.appendChild(toast);

        setTimeout(() => {
            toast.remove();
        }, 3000);
    });
    }

    // Image preloading for gallery
    document.addEventListener('DOMContentLoaded', function() {
    const galleryImages = document.querySelectorAll('.gallery-item img');

    galleryImages.forEach(img => {
        const fullSizeUrl = img.getAttribute('onclick').match(/'([^']+)'/)[1];
        const preloadImg = new Image();
        preloadImg.src = fullSizeUrl;
    });
});
</script>
@endpush
@endsection
