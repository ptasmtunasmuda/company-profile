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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Get to know us
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight" data-aos="fade-up" data-aos-delay="200">
                {{ $page->title }}
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="300">
                Learn about our journey, values, and the team behind your digital success
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($page->getFirstMediaUrl('featured_image'))
            <div class="mb-16 relative" data-aos="fade-up">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-blue-500 rounded-3xl transform rotate-2 opacity-20"></div>
                <img src="{{ $page->getFirstMediaUrl('featured_image') }}"
                     alt="{{ $page->title }}"
                     class="relative w-full h-64 md:h-96 object-cover rounded-3xl shadow-2xl transform -rotate-1 hover:rotate-0 transition-transform duration-500">
            </div>
        @endif

        <div class="prose prose-lg prose-primary max-w-none" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                Our Core Values
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">What Drives Us</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">These fundamental principles guide everything we do and shape how we work with our clients.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1: Innovation -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Innovation</h3>
                    <p class="text-gray-600 leading-relaxed">We stay ahead of technology trends to provide cutting-edge solutions that give you a competitive advantage.</p>
                </div>
            </div>

            <!-- Value 2: Quality -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Quality</h3>
                    <p class="text-gray-600 leading-relaxed">We deliver high-quality work that exceeds expectations through rigorous testing and attention to detail.</p>
                </div>
            </div>

            <!-- Value 3: Transparency -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Transparency</h3>
                    <p class="text-gray-600 leading-relaxed">We maintain open communication throughout every project, keeping you informed at every step.</p>
                </div>
            </div>

            <!-- Value 4: Partnership -->
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Partnership</h3>
                    <p class="text-gray-600 leading-relaxed">We work as an extension of your team, understanding your goals and working together to achieve them.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Our Team
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Meet the People Behind Your Success</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our talented team of developers, designers, and strategists work together to bring your vision to life.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 p-8 text-center">
                    <div class="relative inline-block mb-6">
                        <div class="w-32 h-32 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full mx-auto overflow-hidden ring-4 ring-primary-100 group-hover:ring-primary-200 transition-all duration-300">
                            <img src="{{ asset('images/team-1.jpg') }}" alt="John Doe" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <!-- Status Indicator -->
                        <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-400 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">John Doe</h3>
                    <p class="text-primary-600 font-semibold mb-3">Lead Developer</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">Specializes in full-stack development with 8+ years of experience in Laravel and React. Passionate about clean code and scalable architecture.</p>

                    <!-- Skills -->
                    <div class="flex flex-wrap gap-2 justify-center mb-6">
                        <span class="px-3 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 text-xs rounded-full font-medium">React</span>
                        <span class="px-3 py-1 bg-green-100 text-green-600 text-xs rounded-full font-medium">Vue.js</span>
                    </div>

                    <!-- Social Links -->
                    <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-primary-600 hover:text-white transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-800 hover:text-white transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 p-8 text-center">
                    <div class="relative inline-block mb-6">
                        <div class="w-32 h-32 bg-gradient-to-br from-pink-400 to-purple-600 rounded-full mx-auto overflow-hidden ring-4 ring-pink-100 group-hover:ring-pink-200 transition-all duration-300">
                            <img src="{{ asset('images/team-2.jpg') }}" alt="Jane Smith" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-400 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Jane Smith</h3>
                    <p class="text-primary-600 font-semibold mb-3">UI/UX Designer</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">Creates beautiful and intuitive user experiences with a focus on conversion optimization and user-centered design principles.</p>

                    <div class="flex flex-wrap gap-2 justify-center mb-6">
                        <span class="px-3 py-1 bg-pink-100 text-pink-600 text-xs rounded-full font-medium">Figma</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-600 text-xs rounded-full font-medium">Adobe XD</span>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-600 text-xs rounded-full font-medium">Sketch</span>
                    </div>

                    <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-primary-600 hover:text-white transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-pink-600 hover:text-white transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.014 5.367 18.647.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.596-3.205-1.534l1.18-.906c.423.636 1.146 1.06 1.987 1.06 1.297 0 2.356-1.059 2.356-2.356s-1.059-2.356-2.356-2.356c-.841 0-1.564.424-1.987 1.06l-1.18-.906c.757-.938 1.908-1.534 3.205-1.534 2.297 0 4.158 1.861 4.158 4.158s-1.861 4.158-4.158 4.158z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-primary-200 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 p-8 text-center">
                    <div class="relative inline-block mb-6">
                        <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full mx-auto overflow-hidden ring-4 ring-green-100 group-hover:ring-green-200 transition-all duration-300">
                            <img src="{{ asset('images/team-3.jpg') }}" alt="Mike Johnson" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-400 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Mike Johnson</h3>
                    <p class="text-primary-600 font-semibold mb-3">Mobile Developer</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">Expert in React Native and Flutter development for cross-platform mobile applications with native performance.</p>

                    <div class="flex flex-wrap gap-2 justify-center mb-6">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 text-xs rounded-full font-medium">React Native</span>
                        <span class="px-3 py-1 bg-green-100 text-green-600 text-xs rounded-full font-medium">Flutter</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">Swift</span>
                    </div>

                    <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-primary-600 hover:text-white transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-800 hover:text-white transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-br from-primary-600 to-primary-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium text-blue-100 mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                Our achievements
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Numbers That Speak</h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Our track record demonstrates our commitment to delivering exceptional results for our clients.</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Stat 1 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative mb-4">
                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_projects', '100+') }}</div>
                <div class="text-blue-200 font-medium">Projects Completed</div>
            </div>

            <!-- Stat 2 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative mb-4">
                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_clients', '50+') }}</div>
                <div class="text-blue-200 font-medium">Happy Clients</div>
            </div>

            <!-- Stat 3 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="relative mb-4">
                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_experience', '5+') }}</div>
                <div class="text-blue-200 font-medium">Years Experience</div>
            </div>

            <!-- Stat 4 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                <div class="relative mb-4">
                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_satisfaction', '99%') }}</div>
                <div class="text-blue-200 font-medium">Client Satisfaction</div>
            </div>
        </div>
    </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                    Why choose us
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">What Makes Us Different</h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">We don't just build websites and apps – we create digital experiences that drive real business results.</p>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Cutting-Edge Technology</h4>
                            <p class="text-gray-600 leading-relaxed">We use the latest technologies and frameworks to ensure your project is future-proof and scalable.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Timely Delivery</h4>
                            <p class="text-gray-600 leading-relaxed">We understand deadlines matter. Our proven project management ensures on-time delivery every time.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Dedicated Support</h4>
                            <p class="text-gray-600 leading-relaxed">Our relationship doesn't end at launch. We provide ongoing support and maintenance for your peace of mind.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="relative">
                <!-- Process Flow -->
                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Our Process</h3>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">1</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Discovery & Planning</h4>
                                <p class="text-gray-600 text-sm">We understand your goals and create a detailed roadmap</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">2</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Design & Prototype</h4>
                                <p class="text-gray-600 text-sm">Creating wireframes and interactive prototypes</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">3</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Development</h4>
                                <p class="text-gray-600 text-sm">Building with clean code and best practices</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">4</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Testing & Launch</h4>
                                <p class="text-gray-600 text-sm">Thorough testing before successful deployment</p>
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

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary-600 to-primary-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium text-blue-100 mb-6">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Let's work together
            </div>
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
            <p class="text-xl md:text-2xl text-blue-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                We'd love to hear about your project and discuss how we can help bring your vision to life.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact') }}"
                    class="group relative inline-flex items-center px-8 py-4 bg-white text-primary-600 rounded-2xl font-bold text-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                    Get In Touch
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
