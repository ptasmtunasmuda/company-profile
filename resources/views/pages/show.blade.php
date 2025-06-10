@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

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
                <span class="text-white font-medium">{{ $page->title }}</span>
            </nav>

            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-lg rounded-full text-sm font-semibold text-blue-100 mb-8 border border-white/20 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-5 h-5 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Information Page
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="200">
                {{ $page->title }}
            </h1>

            @if($page->meta_description)
                <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="300">
                    {{ $page->meta_description }}
                </p>
            @endif
        </div>
    </div>
</section>

<!-- Page Content -->
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

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Featured Image -->
        @if($page->getFirstMediaUrl('featured_image'))
            <div class="mb-16 group" data-aos="fade-up">
                <div class="relative overflow-hidden rounded-3xl shadow-2xl transform group-hover:scale-105 transition-transform duration-700">
                    <img src="{{ $page->getFirstMediaUrl('featured_image') }}"
                         alt="{{ $page->title }}"
                         class="w-full h-64 md:h-96 lg:h-[500px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            </div>
        @endif

        <!-- Content Container -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-16">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="prose prose-xl prose-primary max-w-none">
                        {!! $page->content !!}
                    </div>
                </div>

                <!-- Additional Features Section -->
                @if($page->content)
                    <div class="mt-16" data-aos="fade-up" data-aos-delay="300">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Feature 1 -->
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-blue-600 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900">Fast & Reliable</h3>
                                </div>
                                <p class="text-gray-600">We deliver high-quality solutions with optimal performance and reliability.</p>
                            </div>

                            <!-- Feature 2 -->
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900">Quality Assured</h3>
                                </div>
                                <p class="text-gray-600">Every project goes through rigorous testing and quality assurance processes.</p>
                            </div>

                            <!-- Feature 3 -->
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900">24/7 Support</h3>
                                </div>
                                <p class="text-gray-600">Continuous support and maintenance to ensure your success.</p>
                            </div>

                            <!-- Feature 4 -->
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900">Customer First</h3>
                                </div>
                                <p class="text-gray-600">Your satisfaction is our priority, with personalized attention to every detail.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-8">
                    <!-- Quick Info Card -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-6 border border-gray-100" data-aos="fade-left">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-purple-600 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Quick Info</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Last Updated</dt>
                                    <dd class="text-gray-900 font-semibold">{{ $page->updated_at->format('M d, Y') }}</dd>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-6 h-6 bg-green-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Reading Time</dt>
                                    <dd class="text-gray-900 font-semibold">{{ max(1, round(str_word_count(strip_tags($page->content)) / 200)) }} min</dd>
                                </div>
                            </div>

                            @if($page->meta_keywords)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-purple-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500 mb-2">Topics</dt>
                                        <dd class="flex flex-wrap gap-1">
                                            @foreach(explode(',', $page->meta_keywords) as $keyword)
                                                <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">
                                                    {{ trim($keyword) }}
                                                </span>
                                            @endforeach
                                        </dd>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Navigation Card -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-6 border border-gray-100" data-aos="fade-left" data-aos-delay="100">
                        <h4 class="text-lg font-bold text-gray-900 mb-4">Quick Navigation</h4>
                        <div class="space-y-3">
                            <a href="{{ route('home') }}" class="flex items-center text-gray-600 hover:text-primary-600 transition-colors duration-300">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                Back to Home
                            </a>
                            <a href="{{ route('services') }}" class="flex items-center text-gray-600 hover:text-primary-600 transition-colors duration-300">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                                </svg>
                                Our Services
                            </a>
                            <a href="{{ route('portfolio') }}" class="flex items-center text-gray-600 hover:text-primary-600 transition-colors duration-300">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                Our Portfolio
                            </a>
                            <a href="{{ route('contact') }}" class="flex items-center text-gray-600 hover:text-primary-600 transition-colors duration-300">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Contact Us
                            </a>
                        </div>
                    </div>

                    <!-- CTA Card -->
                    <div class="bg-gradient-to-br from-primary-600 to-purple-700 rounded-3xl shadow-xl p-6 text-white" data-aos="fade-left" data-aos-delay="200">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold mb-3">Need Help?</h4>
                            <p class="text-blue-100 mb-6 text-sm">Have questions or need assistance? We're here to help.</p>
                            <a href="{{ route('contact') }}"
                               class="group inline-flex items-center px-4 py-2 bg-white text-primary-600 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-lg text-sm">
                                Contact Us
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Content Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Why Choose Us
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Ready to Get <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Started?</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Let's discuss your project and see how we can help bring your vision to life.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Step 1 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-blue-600 rounded-full mx-auto flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-white font-bold text-2xl">1</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Consultation</h3>
                <p class="text-gray-600">We discuss your needs and provide expert recommendations.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full mx-auto flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-white font-bold text-2xl">2</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Planning</h3>
                <p class="text-gray-600">We create a detailed plan and timeline for your project.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full mx-auto flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-white font-bold text-2xl">3</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Execution</h3>
                <p class="text-gray-600">We deliver exceptional results that exceed expectations.</p>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('contact') }}"
               class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Start Your Project Today
                <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
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
    font-size: 2rem;
    margin-top: 2.5rem;
    margin-bottom: 1.25rem;
}

.prose-primary h3 {
    font-size: 1.5rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.prose-primary p {
    margin-bottom: 1.5rem;
    line-height: 1.8;
    font-size: 1.125rem;
}

.prose-primary ul {
    margin: 1.5rem 0;
    padding-left: 2rem;
}

.prose-primary li {
    margin: 0.75rem 0;
}

.prose-primary strong {
    color: var(--tw-prose-headings);
    font-weight: 600;
}

.prose-primary a {
    color: var(--tw-prose-links);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.prose-primary a:hover {
    color: theme('colors.primary.700');
    text-decoration: underline;
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

/* Enhanced hover effects */
.hover-lift {
   transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.hover-lift:hover {
   transform: translateY(-8px) scale(1.02);
}

/* Reading progress indicator */
.reading-progress {
   position: fixed;
   top: 0;
   left: 0;
   width: 0%;
   height: 3px;
   background: linear-gradient(90deg, theme('colors.primary.500'), theme('colors.purple.500'));
   z-index: 100;
   transition: width 0.3s ease;
}

/* Enhanced blockquote styles */
.prose-primary blockquote {
   border-left: 4px solid theme('colors.primary.500');
   background: linear-gradient(135deg, theme('colors.primary.50'), theme('colors.blue.50'));
   padding: 1.5rem;
   margin: 2rem 0;
   border-radius: 0.75rem;
   font-style: italic;
   position: relative;
}

.prose-primary blockquote::before {
   content: '"';
   font-size: 4rem;
   color: theme('colors.primary.500');
   position: absolute;
   top: -0.5rem;
   left: 1rem;
   font-family: serif;
}

/* Code blocks */
.prose-primary code {
   background: theme('colors.gray.100');
   padding: 0.25rem 0.5rem;
   border-radius: 0.375rem;
   font-size: 0.875rem;
   color: theme('colors.gray.800');
}

.prose-primary pre {
   background: theme('colors.gray.900');
   color: theme('colors.gray.100');
   padding: 1.5rem;
   border-radius: 0.75rem;
   overflow-x: auto;
   margin: 1.5rem 0;
}

/* Table styles */
.prose-primary table {
   border-collapse: collapse;
   width: 100%;
   margin: 2rem 0;
   border-radius: 0.75rem;
   overflow: hidden;
   box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.prose-primary th {
   background: theme('colors.primary.600');
   color: white;
   padding: 1rem;
   text-align: left;
   font-weight: 600;
}

.prose-primary td {
   padding: 1rem;
   border-bottom: 1px solid theme('colors.gray.200');
}

.prose-primary tr:nth-child(even) {
   background: theme('colors.gray.50');
}

/* Image enhancements */
.prose-primary img {
   border-radius: 0.75rem;
   box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
   transition: transform 0.3s ease;
}

.prose-primary img:hover {
   transform: scale(1.02);
}

/* List enhancements */
.prose-primary ul li::marker {
   color: theme('colors.primary.500');
}

.prose-primary ol li::marker {
   color: theme('colors.primary.500');
   font-weight: 600;
}

/* Responsive design */
@media (max-width: 768px) {
   .prose-primary {
       font-size: 1rem;
   }

   .prose-primary h2 {
       font-size: 1.5rem;
   }

   .prose-primary h3 {
       font-size: 1.25rem;
   }
}

/* Print styles */
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

   .bg-gradient-to-br {
       background: white !important;
   }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
   // Reading progress indicator
   const progressBar = document.createElement('div');
   progressBar.className = 'reading-progress';
   document.body.appendChild(progressBar);

   function updateReadingProgress() {
       const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
       const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
       const scrolled = (winScroll / height) * 100;
       progressBar.style.width = scrolled + '%';
   }

   window.addEventListener('scroll', updateReadingProgress);

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

   // Observe elements for scroll animations
   document.querySelectorAll('[data-aos]').forEach(el => {
       observer.observe(el);
   });

   // Auto-generate table of contents if content has headings
   const contentArea = document.querySelector('.prose');
   if (contentArea) {
       const headings = contentArea.querySelectorAll('h2, h3, h4');

       if (headings.length > 2) {
           const tocContainer = document.createElement('div');
           tocContainer.className = 'bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-6 border border-gray-100 mb-8';
           tocContainer.innerHTML = '<h4 class="text-lg font-bold text-gray-900 mb-4">Table of Contents</h4>';

           const tocList = document.createElement('ul');
           tocList.className = 'space-y-2';

           headings.forEach((heading, index) => {
               // Add ID to heading if it doesn't have one
               if (!heading.id) {
                   heading.id = 'heading-' + index;
               }

               const tocItem = document.createElement('li');
               const tocLink = document.createElement('a');
               tocLink.href = '#' + heading.id;
               tocLink.textContent = heading.textContent;
               tocLink.className = `text-gray-600 hover:text-primary-600 transition-colors duration-300 ${heading.tagName === 'H2' ? 'font-semibold' : 'ml-4 text-sm'}`;

               tocItem.appendChild(tocLink);
               tocList.appendChild(tocItem);
           });

           tocContainer.appendChild(tocList);

           // Insert TOC after the first paragraph or at the beginning
           const firstParagraph = contentArea.querySelector('p');
           if (firstParagraph) {
               firstParagraph.parentNode.insertBefore(tocContainer, firstParagraph.nextSibling);
           } else {
               contentArea.insertBefore(tocContainer, contentArea.firstChild);
           }
       }
   }

   // Copy to clipboard for code blocks
   document.querySelectorAll('pre code').forEach(block => {
       const button = document.createElement('button');
       button.className = 'absolute top-2 right-2 bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded text-xs transition-colors duration-300';
       button.textContent = 'Copy';

       button.addEventListener('click', async () => {
           try {
               await navigator.clipboard.writeText(block.textContent);
               button.textContent = 'Copied!';
               setTimeout(() => {
                   button.textContent = 'Copy';
               }, 2000);
           } catch (err) {
               console.error('Failed to copy: ', err);
           }
       });

       const pre = block.parentElement;
       pre.style.position = 'relative';
       pre.appendChild(button);
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

   // Enhanced image modal for content images
   const contentImages = document.querySelectorAll('.prose img');
   contentImages.forEach(img => {
       img.style.cursor = 'pointer';
       img.addEventListener('click', function() {
           createImageModal(this.src, this.alt);
       });
   });

   function createImageModal(src, alt) {
       const modal = document.createElement('div');
       modal.className = 'fixed inset-0 bg-black/90 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 transition-opacity duration-300';
       modal.innerHTML = `
           <div class="relative max-w-6xl max-h-full p-4 w-full">
               <button class="absolute top-6 right-6 z-20 w-12 h-12 bg-white/10 backdrop-blur-sm text-white hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                   </svg>
               </button>
               <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-4 shadow-2xl border border-white/10">
                   <img src="${src}" alt="${alt}" class="max-w-full max-h-[80vh] object-contain rounded-xl mx-auto">
               </div>
               <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white/60 text-sm">
                   <span class="bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full">Press ESC to close</span>
               </div>
           </div>
       `;

       document.body.appendChild(modal);
       document.body.style.overflow = 'hidden';

       // Animate modal entrance
       setTimeout(() => {
           modal.classList.remove('opacity-0');
       }, 10);

       // Close modal functionality
       const closeModal = () => {
           modal.classList.add('opacity-0');
           setTimeout(() => {
               document.body.removeChild(modal);
               document.body.style.overflow = 'auto';
           }, 300);
       };

       modal.querySelector('button').addEventListener('click', closeModal);
       modal.addEventListener('click', (e) => {
           if (e.target === modal) closeModal();
       });

       document.addEventListener('keydown', function escHandler(e) {
           if (e.key === 'Escape') {
               closeModal();
               document.removeEventListener('keydown', escHandler);
           }
       });
   }

   // Estimate reading time dynamically
   const content = document.querySelector('.prose');
   if (content) {
       const wordCount = content.textContent.split(' ').length;
       const readingTime = Math.max(1, Math.round(wordCount / 200));
       const readingTimeElement = document.querySelector('[data-reading-time]');
       if (readingTimeElement) {
           readingTimeElement.textContent = readingTime + ' min';
       }
   }

   // Back to top button
   const backToTopButton = document.createElement('button');
   backToTopButton.className = 'fixed bottom-6 right-6 w-12 h-12 bg-primary-600 hover:bg-primary-700 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform scale-0 z-50';
   backToTopButton.innerHTML = `
       <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
       </svg>
   `;

   document.body.appendChild(backToTopButton);

   window.addEventListener('scroll', () => {
       if (window.pageYOffset > 300) {
           backToTopButton.classList.remove('scale-0');
       } else {
           backToTopButton.classList.add('scale-0');
       }
   });

   backToTopButton.addEventListener('click', () => {
       window.scrollTo({
           top: 0,
           behavior: 'smooth'
       });
   });
});

// Print functionality
function printPage() {
   window.print();
}

// Share functionality
function shareArticle() {
   if (navigator.share) {
       navigator.share({
           title: document.title,
           text: document.querySelector('meta[name="description"]')?.content || '',
           url: window.location.href
       });
   } else {
       // Fallback: copy URL to clipboard
       navigator.clipboard.writeText(window.location.href).then(() => {
           alert('URL copied to clipboard!');
       });
   }
}
</script>
@endpush
@endsection
