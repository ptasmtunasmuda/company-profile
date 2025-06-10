@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

@section('content')
<!-- Page Header -->
<section class="relative bg-gradient-to-br from-primary-600 to-primary-900 text-white pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-primary-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
    <div class="absolute top-40 right-10 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <nav class="text-blue-200 mb-8" data-aos="fade-up">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                <span class="mx-2">/</span>
                <span class="text-white">{{ $page->title }}</span>
            </nav>

            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium text-blue-100 mb-6" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                </svg>
                What we offer
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight" data-aos="fade-up" data-aos-delay="200">
                {{ $page->title }}
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="300">
                Comprehensive digital solutions to transform your business and drive growth in the digital age
            </p>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-white relative overflow-hidden">
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

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-primary max-w-none" data-aos="fade-up">
            <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>

<!-- Detailed Services -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Our Expertise
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Complete Digital Solutions</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">We provide end-to-end digital solutions tailored to your business needs and objectives.</p>
        </div>

        <div class="space-y-20">
            <!-- Web Development -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-blue-500 rounded-3xl transform rotate-3 opacity-20"></div>
                        <div class="relative bg-white/90 backdrop-blur-sm rounded-3xl p-8 border border-white/20 shadow-2xl">
                            <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <!-- Code Preview -->
                            <div class="bg-gray-900 rounded-2xl p-4 shadow-xl">
                                <div class="flex items-center space-x-2 mb-3">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="space-y-1 text-xs font-mono">
                                    <div class="text-blue-400">&lt;div class="container"&gt;</div>
                                    <div class="text-green-400 ml-4">&lt;h1&gt;Modern Web App&lt;/h1&gt;</div>
                                    <div class="text-purple-400 ml-4">&lt;p&gt;Built with Laravel&lt;/p&gt;</div>
                                    <div class="text-blue-400">&lt;/div&gt;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Web Development
                    </div>
                    <h3 class="text-3xl font-bold mb-6 text-gray-900">Modern Web Applications</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">We create modern, responsive websites using cutting-edge technologies. Our development process ensures your website is fast, secure, and optimized for search engines.</p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Custom Laravel Apps
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            React & Vue.js Frontend
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Responsive Design
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            SEO Optimization
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            API Integration
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Database Design
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center px-6 py-3 bg-primary-600 text-white rounded-xl font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105">
                        Get Quote
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" class="order-2 lg:order-1">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-blue-500 rounded-3xl transform -rotate-3 opacity-20"></div>
                        <div class="relative bg-white/90 backdrop-blur-sm rounded-3xl p-8 border border-white/20 shadow-2xl">
                            <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <!-- Mobile Mockup -->
                            <div class="flex justify-center space-x-4">
                                <div class="w-24 h-40 bg-gray-900 rounded-2xl p-2 shadow-xl">
                                    <div class="w-full h-full bg-gradient-to-b from-primary-400 to-primary-600 rounded-xl flex flex-col items-center justify-center text-white text-xs">
                                        <div class="w-8 h-8 bg-white/20 rounded-lg mb-2"></div>
                                        <div class="w-12 h-1 bg-white/40 rounded mb-1"></div>
                                        <div class="w-10 h-1 bg-white/40 rounded"></div>
                                    </div>
                                </div>
                                <div class="w-24 h-40 bg-gray-900 rounded-2xl p-2 shadow-xl">
                                    <div class="w-full h-full bg-gradient-to-b from-green-400 to-emerald-600 rounded-xl flex flex-col items-center justify-center text-white text-xs">
                                        <div class="w-8 h-8 bg-white/20 rounded-lg mb-2"></div>
                                        <div class="w-12 h-1 bg-white/40 rounded mb-1"></div>
                                        <div class="w-10 h-1 bg-white/40 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" class="order-1 lg:order-2">
                    <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-600 rounded-full text-sm font-medium mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        Mobile Development
                    </div>
                    <h3 class="text-3xl font-bold mb-6 text-gray-900">Cross-Platform Mobile Apps</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">Build powerful mobile applications for iOS and Android platforms. We use cross-platform technologies to reduce development time and costs while maintaining native performance.</p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            React Native
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Flutter Development
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            iOS & Android
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            App Store Publishing
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Push Notifications
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Offline Support
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-xl font-semibold hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
                        Get Quote
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- E-Commerce -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-500 rounded-3xl transform rotate-3 opacity-20"></div>
                        <div class="relative bg-white/90 backdrop-blur-sm rounded-3xl p-8 border border-white/20 shadow-2xl">
                            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <!-- E-commerce Mockup -->
                            <div class="bg-white rounded-xl p-4 shadow-lg border">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="w-20 h-3 bg-purple-200 rounded"></div>
                                    <div class="w-8 h-3 bg-pink-200 rounded"></div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-3">
                                    <div class="aspect-square bg-purple-100 rounded"></div>
                                    <div class="aspect-square bg-pink-100 rounded"></div>
                                    <div class="aspect-square bg-purple-100 rounded"></div>
                                </div>
                                <div class="space-y-2">
                                    <div class="w-full h-2 bg-gray-200 rounded"></div>
                                    <div class="w-3/4 h-2 bg-gray-100 rounded"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="inline-flex items-center px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-medium mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        E-Commerce
                    </div>
                    <h3 class="text-3xl font-bold mb-6 text-gray-900">Complete Online Store Solutions</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">Complete online store solutions with payment gateways, inventory management, and customer management systems. Scale your business with our robust e-commerce platforms.</p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Payment Gateway
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Inventory Management
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Order Management
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Multi-vendor Support
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Analytics Dashboard
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Mobile Optimized
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center px-6 py-3 bg-purple-600 text-white rounded-xl font-semibold hover:bg-purple-700 transition-all duration-300 transform hover:scale-105">
                        Get Quote
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Additional Services Grid -->
    <section class="py-20 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
                <g fill="currentColor">
                    <circle cx="30" cy="30" r="1.5"/>
                </g>
            </g>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                </svg>
                More Services
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Complete Digital Ecosystem</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Beyond development, we offer comprehensive services to support your entire digital journey.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- UI/UX Design -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">UI/UX Design</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Modern and intuitive user interfaces focused on user experience and conversion optimization. We create designs that users love and businesses benefit from.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-600 text-xs rounded-full font-medium">Figma</span>
                        <span class="px-3 py-1 bg-orange-100 text-orange-600 text-xs rounded-full font-medium">Prototyping</span>
                        <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full font-medium">User Research</span>
                    </div>
                    <div class="flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Digital Marketing</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">SEO optimization, social media marketing, and digital advertising to reach more customers and grow your online presence effectively.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full font-medium">SEO</span>
                        <span class="px-3 py-1 bg-pink-100 text-pink-600 text-xs rounded-full font-medium">Social Media</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-600 text-xs rounded-full font-medium">Google Ads</span>
                    </div>
                    <div class="flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Maintenance & Support -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Maintenance & Support</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Ongoing maintenance, updates, and technical support to keep your digital assets running smoothly with minimal downtime.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-600 text-xs rounded-full font-medium">24/7 Support</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-600 text-xs rounded-full font-medium">Updates</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 text-xs rounded-full font-medium">Monitoring</span>
                    </div>
                    <div class="flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Development Process -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                Our Process
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">How We Work</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">We follow a proven methodology to ensure your project is delivered on time, within budget, and exceeds expectations.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative mb-8">
                    <div class="w-24 h-24 bg-white rounded-3xl mx-auto flex items-center justify-center shadow-xl group-hover:shadow-2xl transition-all duration-300 group-hover:scale-110 border border-gray-100">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl">1</span>
                        </div>
                    </div>
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-primary-500 rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-bold mb-3 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Discovery & Planning</h3>
                <p class="text-gray-600 leading-relaxed">We analyze your requirements, understand your goals, and create a detailed project roadmap with clear timelines and milestones.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative mb-8">
                    <div class="w-24 h-24 bg-white rounded-3xl mx-auto flex items-center justify-center shadow-xl group-hover:shadow-2xl transition-all duration-300 group-hover:scale-110 border border-gray-100">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl">2</span>
                        </div>
                    </div>
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-bold mb-3 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Design & Prototype</h3>
                <p class="text-gray-600 leading-relaxed">Create wireframes, mockups, and interactive prototypes for user experience validation before moving to development phase.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="relative mb-8">
                    <div class="w-24 h-24 bg-white rounded-3xl mx-auto flex items-center justify-center shadow-xl group-hover:shadow-2xl transition-all duration-300 group-hover:scale-110 border border-gray-100">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl">3</span>
                        </div>
                    </div>
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-bold mb-3 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Development</h3>
                <p class="text-gray-600 leading-relaxed">Build your application using the latest technologies and best practices with regular updates and transparent communication.</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                <div class="relative mb-8">
                    <div class="w-24 h-24 bg-white rounded-3xl mx-auto flex items-center justify-center shadow-xl group-hover:shadow-2xl transition-all duration-300 group-hover:scale-110 border border-gray-100">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                    </div>
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-bold mb-3 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Testing & Launch</h3>
                <p class="text-gray-600 leading-relaxed">Thorough testing, quality assurance, and successful deployment with ongoing support and maintenance services.</p>
            </div>
        </div>
    </div>
    </section>

    <!-- Pricing Plans -->
    <section class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
                Transparent Pricing
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Choose Your Package</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Simple, transparent pricing that grows with you. Try any plan free for 30 days.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Plan -->
            <div class="relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 hover:border-primary-300 p-8" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Basic Website</h3>
                    <p class="text-gray-600 mb-4">Perfect for small businesses</p>
                    <div class="text-4xl font-bold text-gray-900 mb-2">$2,999</div>
                    <p class="text-gray-500 text-sm">One-time payment</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Up to 5 pages</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Responsive design</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Contact form</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Basic SEO</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">30 days support</span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="w-full bg-gray-900 text-white py-3 px-6 rounded-xl font-semibold hover:bg-gray-800 transition-colors duration-300 text-center block">
                    Get Started
                </a>
            </div>

            <!-- Professional Plan -->
            <div class="relative bg-gradient-to-br from-primary-600 to-primary-700 rounded-3xl shadow-2xl transform scale-105 p-8 text-white" data-aos="fade-up" data-aos-delay="200">
                <!-- Popular Badge -->
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-yellow-400 text-yellow-900 px-4 py-2 rounded-full text-sm font-semibold">Most Popular</span>
                </div>

                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold mb-2">Professional</h3>
                    <p class="text-blue-100 mb-4">For growing businesses</p>
                    <div class="text-4xl font-bold mb-2">$7,999</div>
                    <p class="text-blue-200 text-sm">One-time payment</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">Up to 15 pages</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">Custom design</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">CMS integration</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">Advanced SEO</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">Analytics setup</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">90 days support</span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="w-full bg-white text-primary-600 py-3 px-6 rounded-xl font-semibold hover:bg-gray-50 transition-colors duration-300 text-center block">
                    Get Started
                </a>
            </div>

            <!-- Enterprise Plan -->
            <div class="relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 hover:border-primary-300 p-8" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Enterprise</h3>
                    <p class="text-gray-600 mb-4">For large organizations</p>
                    <div class="text-4xl font-bold text-gray-900 mb-2">Custom</div>
                    <p class="text-gray-500 text-sm">Let's discuss</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Unlimited pages</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Custom features</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">API integrations</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Priority support</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Dedicated manager</span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="w-full bg-gray-900 text-white py-3 px-6 rounded-xl font-semibold hover:bg-gray-800 transition-colors duration-300 text-center block">
                    Contact Us
                </a>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-12" data-aos="fade-up">
            <p class="text-gray-600 mb-4">All plans include free SSL certificate, hosting setup, and domain configuration</p>
            <a href="{{ route('contact') }}" class="text-primary-600 hover:text-primary-700 font-semibold">
                Need a custom solution? Let's talk →
            </a>
        </div>
    </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary-600 to-primary-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium text-blue-100 mb-6">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Ready to get started?
            </div>
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Let's Build Something Amazing Together</h2>
            <p class="text-xl md:text-2xl text-blue-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                Ready to transform your business with cutting-edge digital solutions? Let's discuss your project requirements and provide you with a detailed proposal.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact') }}"
                    class="group relative inline-flex items-center px-8 py-4 bg-white text-primary-600 rounded-2xl font-bold text-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                    Get Free Consultation
                    <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>

                <a href="{{ route('portfolio') }}"
                    class="group inline-flex items-center px-8 py-4 border-2 border-white/30 text-white rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-sm">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    View Our Work
                </a>
            </div>

            <!-- Contact Info -->
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-8 text-blue-100">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    {{ \App\Models\Setting::get('contact_email', 'info@company.com') }}
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    {{ \App\Models\Setting::get('contact_phone', '+62 123-456-7890') }}
                </div>
            </div>
        </div>
    </div>
    </section>

    @push('styles')
    <style>
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

    @keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
    }

    .animate-float {
    animation: float 6s ease-in-out infinite;
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
</style>
@endpush
@endsection
