@extends('layouts.app')

@section('title', $heroContent['title'])
@section('description', $heroContent['subtitle'])

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary-600 to-primary-900 text-white pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-primary-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
    <div class="absolute top-40 right-10 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[80vh]">
            <div data-aos="fade-right" class="text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium text-blue-100 mb-6">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    Available for new projects
                </div>

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    <span class="text-white">{{ $heroContent['title'] }}</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed max-w-2xl">
                    {{ $heroContent['subtitle'] }}
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="{{ $heroContent['cta_link'] }}"
                       class="group relative inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 rounded-2xl font-semibold text-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        {{ $heroContent['cta_text'] }}
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('portfolio') }}"
                       class="group inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white rounded-2xl font-semibold text-lg hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-sm">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        View Portfolio
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 pt-8 border-t border-white/20">
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white">{{ $stats['projects'] }}</div>
                        <div class="text-blue-200 text-sm">Projects Completed</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white">{{ $stats['clients'] }}</div>
                        <div class="text-blue-200 text-sm">Happy Clients</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white">{{ $stats['experience'] }}</div>
                        <div class="text-blue-200 text-sm">Years Experience</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white">{{ $stats['satisfaction'] }}</div>
                        <div class="text-blue-200 text-sm">Client Satisfaction</div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="relative">
                <div class="relative z-10">
                    <!-- Hero Image/Illustration -->
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-blue-500 rounded-3xl transform rotate-6 opacity-20"></div>
                        <div class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                            <!-- Code Editor Mockup -->
                            <div class="bg-gray-900 rounded-2xl p-6 shadow-2xl">
                                <div class="flex items-center space-x-2 mb-4">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="space-y-2 text-sm font-mono">
                                    <div class="text-blue-400">&lt;html&gt;</div>
                                    <div class="text-green-400 ml-4">&lt;body&gt;</div>
                                    <div class="text-purple-400 ml-8">&lt;h1&gt;Hello World&lt;/h1&gt;</div>
                                    <div class="text-yellow-400 ml-8">&lt;p&gt;Building amazing websites&lt;/p&gt;</div>
                                    <div class="text-green-400 ml-4">&lt;/body&gt;</div>
                                    <div class="text-blue-400">&lt;/html&gt;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-yellow-400 rounded-2xl opacity-80 animate-float"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-purple-500 rounded-full opacity-60 animate-float animation-delay-2000"></div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
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

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                </svg>
                Our Services
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">What We Offer</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">We offer comprehensive digital solutions to help your business grow and succeed in the modern world.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Web Development</h3>
                    <p class="text-gray-600 leading-relaxed">Custom websites built with modern technologies like Laravel, React, and Vue.js. Responsive, fast, and SEO-optimized.</p>
                    <div class="mt-6 flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Mobile App Development</h3>
                    <p class="text-gray-600 leading-relaxed">Native and cross-platform mobile apps for iOS and Android using React Native and Flutter technologies.</p>
                    <div class="mt-6 flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">E-Commerce Solutions</h3>
                    <p class="text-gray-600 leading-relaxed">Complete online stores with payment integration, inventory management, and customer relationship systems.</p>
                    <div class="mt-6 flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Service Card 4 -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">UI/UX Design</h3>
                    <p class="text-gray-600 leading-relaxed">Modern and intuitive user interfaces focused on user experience and conversion optimization.</p>
                    <div class="mt-6 flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Service Card 5 -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="500">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Digital Marketing</h3>
                    <p class="text-gray-600 leading-relaxed">SEO optimization, social media marketing, and digital advertising to reach more customers.</p>
                    <div class="mt-6 flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Service Card 6 -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="600">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Maintenance & Support</h3>
                    <p class="text-gray-600 leading-relaxed">Ongoing maintenance, updates, and technical support to keep your digital assets running smoothly.</p>
                    <div class="mt-6 flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Learn more
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Services Button -->
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('services') }}"
               class="inline-flex items-center px-8 py-4 bg-primary-600 text-white rounded-2xl font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                View All Services
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
    <div class="absolute top-0 right-0 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right" class="relative">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-blue-500 rounded-3xl transform -rotate-6 opacity-20"></div>
                    <img src="{{ asset('images/about-image.jpg') }}" alt="About Us"
                         class="relative rounded-3xl shadow-2xl w-full h-auto transform rotate-2 hover:rotate-0 transition-transform duration-500">
                </div>

                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">{{ $stats['satisfaction'] }}</div>
                            <div class="text-sm text-gray-600">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="space-y-8">
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $aboutContent['subtitle'] }}
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">{{ $aboutContent['title'] }}</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">{{ $aboutContent['description'] }}</p>
                </div>

                <!-- Features -->
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-1">Expert Team</h4>
                            <p class="text-gray-600">Experienced developers and designers who stay current with latest technologies</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-1">Quality Focused</h4>
                            <p class="text-gray-600">We deliver high-quality solutions that exceed client expectations</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-1">On-Time Delivery</h4>
                            <p class="text-gray-600">We respect deadlines and deliver projects on schedule</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="{{ route('about') }}"
                        class="inline-flex items-center px-6 py-3 bg-primary-600 text-white rounded-xl font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105">
                        Learn More About Us
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Portfolio Section -->
    @if($featuredPortfolios->count() > 0)
    <section class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Featured Projects
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Latest Work</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Take a look at some of our recent work and see how we've helped businesses achieve their digital goals.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredPortfolios as $portfolio)
                <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="relative overflow-hidden">
                        @if(method_exists($portfolio, 'getFirstMediaUrl') && $portfolio->getFirstMediaUrl('featured_image'))
                            <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'thumb') }}"
                                    alt="{{ $portfolio->title }}"
                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="w-full h-64 bg-gradient-to-br from-primary-100 to-blue-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                            <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                                class="bg-white text-primary-600 px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 hover:bg-primary-600 hover:text-white">
                                View Project
                            </a>
                        </div>

                        <!-- Featured Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-yellow-400 text-yellow-900 text-xs px-3 py-1 rounded-full font-semibold">Featured</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">{{ $portfolio->title }}</h3>
                        </div>

                        @if($portfolio->client_name)
                            <p class="text-sm text-primary-600 font-medium mb-3">{{ $portfolio->client_name }}</p>
                        @endif

                        <p class="text-gray-600 mb-6 leading-relaxed">{{ $portfolio->description }}</p>

                        @if($portfolio->technologies)
                            <div class="flex flex-wrap gap-2 mb-6">
                                @foreach(array_slice($portfolio->technologies, 0, 3) as $tech)
                                    <span class="px-3 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">{{ $tech }}</span>
                                @endforeach
                                @if(count($portfolio->technologies) > 3)
                                    <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+{{ count($portfolio->technologies) - 3 }}</span>
                                @endif
                            </div>
                        @endif

                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                            class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group-hover:translate-x-1 transform">
                            View Details
                            <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('portfolio') }}"
                class="inline-flex items-center px-8 py-4 bg-primary-600 text-white rounded-2xl font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                View All Projects
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
    </section>
    @endif

    <!-- Testimonials Section -->
    @if($testimonials->count() > 0)
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Client Testimonials
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">What Our Clients Say</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Don't just take our word for it. Here's what some of our satisfied clients have to say about working with us.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 relative group hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <!-- Quote Icon -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-primary-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>

                    <!-- Stars -->
                    <div class="flex items-center mb-6">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="w-5 h-5 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                    </div>

                    <!-- Testimonial Text -->
                    <blockquote class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "{{ $testimonial->testimonial }}"
                    </blockquote>

                    <!-- Client Info -->
                    <div class="flex items-center">
                        @if(method_exists($testimonial, 'getFirstMediaUrl') && $testimonial->getFirstMediaUrl('avatar'))
                            <img src="{{ $testimonial->getFirstMediaUrl('avatar', 'thumb') }}"
                                    alt="{{ $testimonial->client_name }}"
                                    class="w-12 h-12 rounded-full object-cover mr-4 ring-2 ring-primary-100">
                        @else
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full mr-4 flex items-center justify-center ring-2 ring-primary-100">
                                <span class="text-white font-semibold text-lg">{{ substr($testimonial->client_name, 0, 1) }}</span>
                            </div>
                        @endif
                        <div>
                            <div class="font-semibold text-gray-900">{{ $testimonial->client_name }}</div>
                            @if($testimonial->client_position && $testimonial->client_company)
                                <div class="text-sm text-gray-500">{{ $testimonial->client_position }}, {{ $testimonial->client_company }}</div>
                            @elseif($testimonial->client_company)
                                <div class="text-sm text-gray-500">{{ $testimonial->client_company }}</div>
                            @elseif($testimonial->client_position)
                                <div class="text-sm text-gray-500">{{ $testimonial->client_position }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </section>
    @endif

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
                Let's discuss your ideas and see how we can help you bring them to life. Get in touch with us today for a free consultation.
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
</style>
@endpush
@endsection
