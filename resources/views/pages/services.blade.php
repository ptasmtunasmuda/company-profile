@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

@section('content')
<!-- Page Header - Diselaraskan dengan Portfolio -->
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                </svg>
                Koleksi Layanan Premium
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="200">
                {{ $page->title }}
            </h1>
            <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 max-w-4xl mx-auto leading-relaxed font-light mb-12" data-aos="fade-up" data-aos-delay="300">
                Temukan <span class="font-semibold text-yellow-300">solusi digital</span> yang mengubah bisnis yang berpikiran maju
            </p>

            <!-- Stats Counter - Ditambahkan dari Portfolio -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">100+</div>
                    <div class="text-blue-200 text-sm font-medium">Layanan Disampaikan</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">15+</div>
                    <div class="text-blue-200 text-sm font-medium">Teknologi</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">5+</div>
                    <div class="text-blue-200 text-sm font-medium">Pengalaman Bertahun-tahun</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">24/7</div>
                    <div class="text-blue-200 text-sm font-medium">Dukungan Tersedia</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Navigation - Seperti Portfolio Navigation -->
<section class="py-12 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up">
            <button class="service-filter active px-6 py-3 bg-primary-600 text-white rounded-full font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105 shadow-lg" data-filter="all">
                Semua Layanan
            </button>
            <button class="service-filter px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="development">
                Development
            </button>
            <button class="service-filter px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="design">
                Design
            </button>
            <button class="service-filter px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="marketing">
                Marketing
            </button>
        </div>
    </div>
</section>

<!-- Featured Services -->
<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Enhanced Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-yellow-200 to-orange-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000"></div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="featured-services-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#featured-services-grid)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold mb-6 shadow-xl transform hover:scale-105 transition-transform duration-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Layanan Pemenang Penghargaan
            </div>
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-black text-gray-900 mb-8 leading-tight">
                Unggulan <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Solusi</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Layanan luar biasa yang menunjukkan komitmen kami terhadap keunggulan dan inovasi</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-10">
            <!-- Web Development Service -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="150">
                <!-- Card Background with Gradient Border -->
                <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <!-- Main Card -->
                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20">
                    <!-- Featured Badge -->
                    <div class="absolute -top-4 -right-4 z-20">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12 group-hover:rotate-6 transition-transform duration-300">
                            ⭐ Unggulan
                        </div>
                    </div>

                    <!-- Icon Section -->
                    <div class="relative overflow-hidden p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>

                        <!-- Service Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                Development
                            </span>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="p-8 pt-0">
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                                Web Development
                            </h3>
                            <div class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-6 h-6 text-primary-600 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">Situs web modern dan responsif yang menggunakan teknologi mutakhir. Cepat, aman, dan dioptimalkan untuk mesin pencari.</p>

                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">Laravel</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">React</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">Vue.js</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium border border-gray-200">+3 lagi</span>
                        </div>

                        <!-- Action Button -->
                        <a href="{{ route('contact') }}"
                           class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Dapatkan Penawaran
                            <svg class="w-5 h-5 ml-2 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile App Development Service -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-r from-green-400 via-emerald-500 to-teal-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20">
                    <div class="absolute -top-4 -right-4 z-20">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12 group-hover:rotate-6 transition-transform duration-300">
                            ⭐ Unggulan
                        </div>
                    </div>

                    <div class="relative overflow-hidden p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                Mobile
                            </span>
                        </div>
                    </div>

                    <div class="p-8 pt-0">
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                                Mobile Apps
                            </h3>
                            <div class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-6 h-6 text-primary-600 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">Aplikasi mobile ross-platform untuk iOS dan Android dengan kinerja asli dan UI modern.</p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 text-xs rounded-full font-medium border border-green-200">React Native</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 text-xs rounded-full font-medium border border-green-200">Flutter</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 text-xs rounded-full font-medium border border-green-200">Swift</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium border border-gray-200">+2 lagi</span>
                        </div>

                        <a href="{{ route('contact') }}"
                           class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-green-600 to-emerald-600 text-white rounded-xl font-semibold hover:from-green-700 hover:to-emerald-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Dapatkan Penawaran
                            <svg class="w-5 h-5 ml-2 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- UI/UX Design Service -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="450">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20">
                    <div class="absolute -top-4 -right-4 z-20">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12 group-hover:rotate-6 transition-transform duration-300">
                            ⭐ Keunggulan
                        </div>
                    </div>

                    <div class="relative overflow-hidden p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                            </svg>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                Design
                            </span>
                        </div>
                    </div>

                    <div class="p-8 pt-0">
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                                UI/UX Design
                            </h3>
                            <div class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-6 h-6 text-primary-600 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">Antarmuka pengguna yang intuitif berfokus pada pengalaman pengguna dan pengoptimalan konversi yang disukai pengguna.</p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-gradient-to-r from-yellow-100 to-orange-100 text-yellow-700 text-xs rounded-full font-medium border border-yellow-200">Figma</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-yellow-100 to-orange-100 text-yellow-700 text-xs rounded-full font-medium border border-yellow-200">Prototyping</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-yellow-100 to-orange-100 text-yellow-700 text-xs rounded-full font-medium border border-yellow-200">Research</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium border border-gray-200">+4 lagi</span>
                        </div>

                        <a href="{{ route('contact') }}"
                           class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-600 to-orange-600 text-white rounded-xl font-semibold hover:from-yellow-700 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Dapatkan Penawaran
                            <svg class="w-5 h-5 ml-2 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview - Disesuaikan dengan Portfolio style -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-3">
        <svg class="w-full h-full" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="services-overview-pattern" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="2" fill="currentColor"/>
                    <circle cx="10" cy="10" r="1" fill="currentColor"/>
                    <circle cx="50" cy="50" r="1" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#services-overview-pattern)" />
        </svg>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 rounded-full text-sm font-semibold mb-6 border border-gray-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Tentang Layanan Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Menyelesaikan <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Solusi Digital</span>
            </h2>
        </div>

        <div class="prose prose-lg prose-primary max-w-none" data-aos="fade-up">
            <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>

<!-- All Services Grid - Diselaraskan dengan Portfolio style -->
<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                </svg>
                Keahlian Kami
            </div>
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-black text-gray-900 mb-8 leading-tight">
                Menyelesaikan <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Portofolio Layanan</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Jelajahi penawaran layanan komprehensif kami di seluruh domain digital</p>
        </div>

        <div class="service-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="service-grid">
            <!-- Web Development Service Card -->
            <div class="service-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
                    data-category="development"
                    data-aos="fade-up"
                    data-aos-delay="100">

                <!-- Subtle Gradient Background -->
                <div class="absolute inset-0 bg-gradient-to-br from-primary-50/50 to-purple-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative z-10">
                    <!-- Icon Section -->
                    <div class="relative overflow-hidden rounded-t-3xl p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>

                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Development
                            </span>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                            Web Development
                        </h3>

                        <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">Situs web modern dan responsif yang menggunakan teknologi mutakhir. Cepat, aman, dan dioptimalkan untuk SEO.</p>

                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">Laravel</span>
                            <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">React</span>
                            <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">Vue.js</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+3</span>
                        </div>

                        <!-- Action Link -->
                        <div class="flex items-center justify-between">
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                <span>Dapatkan Penawaran</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>

                            <div class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="Starting from $2,999">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="service-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
                    data-category="development"
                    data-aos="fade-up"
                    data-aos-delay="200">

                <div class="absolute inset-0 bg-gradient-to-br from-green-50/50 to-emerald-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative z-10">
                    <div class="relative overflow-hidden rounded-t-3xl p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Development
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                            Mobile App Development
                        </h3>

                        <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">Aplikasi mobile lintas platform untuk iOS dan Android dengan kinerja asli.</p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-green-100 text-green-600 text-xs rounded-full font-medium">React Native</span>
                            <span class="px-2 py-1 bg-green-100 text-green-600 text-xs rounded-full font-medium">Flutter</span>
                            <span class="px-2 py-1 bg-green-100 text-green-600 text-xs rounded-full font-medium">Swift</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+2</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                <span>Dapatkan Penawaran</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>

                            <div class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="Starting from $4,999">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- E-Commerce Development -->
            <div class="service-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
                    data-category="development"
                    data-aos="fade-up"
                    data-aos-delay="300">

                <div class="absolute inset-0 bg-gradient-to-br from-purple-50/50 to-pink-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative z-10">
                    <div class="relative overflow-hidden rounded-t-3xl p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Development
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                            E-Commerce Solutions
                        </h3>

                        <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">Solusi toko online lengkap dengan gateway pembayaran dan manajemen inventaris.</p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 text-xs rounded-full font-medium">WooCommerce</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 text-xs rounded-full font-medium">Shopify</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 text-xs rounded-full font-medium">Magento</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+4</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                <span>Dapatkan Penawaran</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>

                            <div class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="Starting from $6,999">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UI/UX Design -->
            <div class="service-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
                    data-category="design"
                    data-aos="fade-up"
                    data-aos-delay="400">

                <div class="absolute inset-0 bg-gradient-to-br from-yellow-50/50 to-orange-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative z-10">
                    <div class="relative overflow-hidden rounded-t-3xl p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                            </svg>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Design
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                            UI/UX Design
                        </h3>

                        <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">Antarmuka pengguna yang intuitif berfokus pada pengalaman pengguna dan pengoptimalan konversi.</p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-600 text-xs rounded-full font-medium">Figma</span>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-600 text-xs rounded-full font-medium">Adobe XD</span>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-600 text-xs rounded-full font-medium">Sketch</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+2</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                <span>Dapatkan Penawaran</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>

                            <div class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="Starting from $1,999">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="service-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
                    data-category="marketing"
                    data-aos="fade-up"
                    data-aos-delay="500">

                <div class="absolute inset-0 bg-gradient-to-br from-red-50/50 to-pink-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative z-10">
                    <div class="relative overflow-hidden rounded-t-3xl p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Marketing
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                            Digital Marketing
                        </h3>

                        <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">Optimasi SEO, pemasaran media sosial, dan strategi periklanan digital.</p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded-full font-medium">SEO</span>
                            <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded-full font-medium">Google Ads</span>
                            <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded-full font-medium">Social Media</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+5</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                <span>Dapatkan Penawaran</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>

                            <div class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="Starting from $999/month">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Maintenance & Support -->
            <div class="service-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
                    data-category="support"
                    data-aos="fade-up"
                    data-aos-delay="600">

                <div class="absolute inset-0 bg-gradient-to-br from-indigo-50/50 to-blue-50/50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative z-10">
                    <div class="relative overflow-hidden rounded-t-3xl p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Dukungan
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                            Pemeliharaan & Dukungan
                        </h3>

                        <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">Dukungan teknis, pembaruan, dan pemeliharaan 24/7 untuk menjaga sistem Anda berjalan lancar.</p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-indigo-100 text-indigo-600 text-xs rounded-full font-medium">24/7 Dukungan</span>
                            <span class="px-2 py-1 bg-indigo-100 text-indigo-600 text-xs rounded-full font-medium">Updates</span>
                            <span class="px-2 py-1 bg-indigo-100 text-indigo-600 text-xs rounded-full font-medium">Monitoring</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+3</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('contact') }}"
                            class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                <span>Dapatkan Penawaran</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>

                            <div class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="Starting from $199/month">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load lagi Button -->
        <div class="text-center mt-16" data-aos="fade-up">
            <button id="loadlagi" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Load lagi Services
                <svg class="w-5 h-5 ml-3 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </button>
        </div>
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
                Proses Kami yang Terbukti
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">
                Dari <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Konsep</span> ke Realitas
            </h2>
            <p class="text-xl text-blue-100 max-w-4xl mx-auto leading-relaxed">Setiap layanan mengikuti proses yang dibuat dengan cermat untuk memastikan hasil yang luar biasa</p>
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
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-yellow-400 transition-colors duration-300">Penemuan & Strategi</h3>
                <p class="text-blue-200 leading-relaxed">Selami lebih dalam persyaratan, tujuan, dan sasaran Anda untuk membuat peta jalan layanan yang komprehensif</p>
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
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-green-400 transition-colors duration-300">Perencanaan & Desain</h3>
                <p class="text-blue-200 leading-relaxed">Buat rencana terperinci, kerangka kerja, dan desain yang selaras dengan visi dan tujuan Anda</p>
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
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-purple-400 transition-colors duration-300">Pelaksanaan</h3>
                <p class="text-blue-200 leading-relaxed">Melaksanakan rencana menggunakan praktik terbaik, teknologi terkini, dan jaminan kualitas yang ketat</p>
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
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-orange-400 transition-colors duration-300">Pengiriman & Dukungan</h3>
                <p class="text-blue-200 leading-relaxed">Pengiriman yang lancar dan dukungan berkelanjutan untuk memastikan keberhasilan layanan Anda yang berkelanjutan</p>
            </div>
        </div>
    </div>
    </section>

    <!-- Pricing Plans dengan sedikit modifikasi -->
    <section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
                Penetapan Harga Transparan
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Pilih Anda <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Paket Layanan</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Harga yang sederhana dan transparan yang tumbuh seiring dengan kebutuhan bisnis Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Starter Plan -->
            <div class="relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 hover:border-primary-300 p-8" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Paket Pemula</h3>
                    <p class="text-gray-600 mb-4">Sempurna untuk usaha kecil</p>
                    <div class="text-4xl font-bold text-gray-900 mb-2">Rp2,999,000</div>
                    <p class="text-gray-500 text-sm">Pembayaran satu kali</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Basic Website/App</span>
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
                        <span class="text-gray-600">Basic SEO setup</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">30 days support</span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="w-full bg-gray-900 text-white py-3 px-6 rounded-xl font-semibold hover:bg-gray-800 transition-colors duration-300 text-center block">
                    Memulai
                </a>
            </div>

            <!-- Professional Plan -->
            <div class="relative bg-gradient-to-br from-primary-600 to-primary-700 rounded-3xl shadow-2xl transform scale-105 p-8 text-white" data-aos="fade-up" data-aos-delay="200">
                <!-- Popular Badge -->
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-yellow-400 text-yellow-900 px-4 py-2 rounded-full text-sm font-semibold">Paling Populer</span>
                </div>

                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold mb-2">Profesional</h3>
                    <p class="text-blue-100 mb-4">Untuk bisnis yang sedang berkembang</p>
                    <div class="text-4xl font-bold mb-2">Rp7,999,000</div>
                    <p class="text-blue-200 text-sm">Pembayaran satu kali</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">Fungsionalitas tingkat lanjut</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">Desain khusus</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">Integrasi CMS</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">SEO tingkat lanjut</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-100">Dukungan 90 hari</span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="w-full bg-white text-primary-600 py-3 px-6 rounded-xl font-semibold hover:bg-gray-50 transition-colors duration-300 text-center block">
                    Memulai
                </a>
            </div>

            <!-- Enterprise Plan -->
            <div class="relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 hover:border-primary-300 p-8" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Perusahaan</h3>
                    <p class="text-gray-600 mb-4">Untuk organisasi besar</p>
                    <div class="text-4xl font-bold text-gray-900 mb-2">Custom</div>
                    <p class="text-gray-500 text-sm">Mari berdiskusi</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Fitur tidak terbatas</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Solusi khusus</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Integrasi API</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Dukungan prioritas</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Manajer yang berdedikasi</span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="w-full bg-gray-900 text-white py-3 px-6 rounded-xl font-semibold hover:bg-gray-800 transition-colors duration-300 text-center block">
                    Hubungi kami
                </a>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-16" data-aos="fade-up">
            <p class="text-gray-600 mb-4">Semua paket termasuk konsultasi, manajemen project, dan jaminan kualitas</p>
            <a href="{{ route('contact') }}" class="text-primary-600 hover:text-primary-700 font-semibold">
                Butuh solusi khusus? Mari kita bicarakan →
            </a>
        </div>
    </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
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
                Testimoni Klien
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Apa <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Kata Klien</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Jangan hanya percaya pada apa yang kami katakan - dengarkan pengalaman dari bisnis yang telah kami bantu transformasikan</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1 .118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        @endfor
                    </div>
                </div>
                <blockquote class="text-gray-600 leading-relaxed mb-6 italic">
                    "Layanan pengembangan web mereka melampaui ekspektasi kami. Tim yang profesional, pengiriman tepat waktu, dan dukungan yang sangat baik selama proyek berlangsung."
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
                    "Layanan desain UI/UX yang luar biasa! Mereka mengubah antarmuka lama kami menjadi pengalaman modern dan ramah pengguna yang disukai pelanggan kami."
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
                    "Layanan pemasaran digital yang luar biasa! Visibilitas online kami meningkat drastis, dan kami melihat hasil nyata dalam bulan pertama."
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
                Siap Mengubah Bisnis Anda?
            </div>

            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 leading-tight">
                Mari Membangun Anda
                <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-pink-500 bg-clip-text text-transparent">
                    Masa Depan Digital
                </span>
            </h2>

            <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 mb-12 max-w-5xl mx-auto leading-relaxed font-light">
                Bergabunglah dengan jajaran bisnis sukses yang telah mengubah kehadiran digital mereka dengan layanan inovatif kami
            </p>

            <div class="flex flex-col sm:flex-row gap-8 justify-center items-center mb-16">
                <a href="{{ route('contact') }}"
                    class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-2xl font-black text-xl hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl hover:shadow-3xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="relative z-10">Dapatkan Konsultasi Gratis</span>
                    <svg class="relative z-10 w-6 h-6 ml-3 transform group-hover:translate-x-2 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>

                <a href="{{ route('portfolio') }}"
                    class="group inline-flex items-center px-10 py-5 border-3 border-white/40 text-white rounded-2xl font-black text-xl hover:bg-white/10 hover:border-white backdrop-blur-sm transition-all duration-500">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Lihat Pekerjaan Kami
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
                    <h4 class="font-bold text-white mb-2">Email Kami</h4>
                    <p class="text-center">{{ \App\Models\Setting::get('contact_email', 'info@company.com') }}</p>
                </div>

                <div class="flex flex-col items-center text-blue-100">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 border border-white/20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Hubungi Kami</h4>
                    <p class="text-center">{{ \App\Models\Setting::get('contact_phone', '+62 123-456-7890') }}</p>
                </div>

                <div class="flex flex-col items-center text-blue-100">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 border border-white/20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Waktu Respons</h4>
                    <p class="text-center">Dalam waktu 24 jam</p>
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
    .service-item {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .service-item:hover {
    transform: translateY(-12px) rotateX(5deg);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    /* Filter Buttons */
    .service-filter {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .service-filter.active {
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

    /* Responsive Design Enhancements */
    @media (max-width: 768px) {
    .service-item:hover {
        transform: translateY(-8px);
    }
    }

    /* Print Styles */
    @media print {
    .service-item {
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
    // Service Filter Functionality
    const filterButtons = document.querySelectorAll('.service-filter');
    const serviceItems = document.querySelectorAll('.service-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');

            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Filter service items
            serviceItems.forEach(item => {
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

    // Load lagi Functionality
    const loadlagiBtn = document.getElementById('loadlagi');
    if (loadlagiBtn) {
        loadlagiBtn.addEventListener('click', function() {
            // Add loading state
            this.innerHTML = `
                <svg class="animate-spin w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Loading lagi Services...
            `;

            // Simulate loading delay
            setTimeout(() => {
                this.innerHTML = 'Load lagi Services <svg class="w-5 h-5 ml-3 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>';
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

    // Observe service items for scroll animations
    serviceItems.forEach(item => {
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
                counter.textContent = Math.ceil(current) + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('/') ? '/7' : '');
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('/') ? '/7' : '');
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

    // Enhanced hover effects for service items
    serviceItems.forEach(item => {
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
