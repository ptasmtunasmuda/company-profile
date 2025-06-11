@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

@section('content')
<!-- Page Header - Selaras dengan Services -->
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Temukan Kisah Kami
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="200">
                {{ $page->title }}
            </h1>
            <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 max-w-4xl mx-auto leading-relaxed font-light mb-12" data-aos="fade-up" data-aos-delay="300">
                Pelajari tentang kami <span class="font-semibold text-yellow-300">perjalanan, nilai,</span> dan tim yang bersemangat di balik kesuksesan digital Anda
            </p>

            <!-- Stats Counter -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_projects', '100+') }}</div>
                    <div class="text-blue-200 text-sm font-medium">Project Selesai</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_clients', '50+') }}</div>
                    <div class="text-blue-200 text-sm font-medium">Klien yang Bahagia</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_experience', '5+') }}</div>
                    <div class="text-blue-200 text-sm font-medium">Pengalaman Bertahun-tahun</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_satisfaction', '99%') }}</div>
                    <div class="text-blue-200 text-sm font-medium">Kepuasan Klien</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Enhanced Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"></div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="about-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#about-grid)" />
        </svg>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($page->getFirstMediaUrl('featured_image'))
            <div class="mb-20 relative" data-aos="fade-up">
                <!-- Card Background with Gradient Border -->
                <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 opacity-20"></div>

                <!-- Main Image Card -->
                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl border border-white/20 p-4">
                    <img src="{{ $page->getFirstMediaUrl('featured_image') }}"
                         alt="{{ $page->title }}"
                         class="w-full h-64 md:h-96 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        @endif

        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                Kisah Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Perjalanan Dibalik Anda <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Sukses Digital</span>
            </h2>
        </div>

        <div class="prose prose-lg prose-primary max-w-none" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white/95 backdrop-blur-xl rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-3">
        <svg class="w-full h-full" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="values-pattern" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="2" fill="currentColor"/>
                    <circle cx="10" cy="10" r="1" fill="currentColor"/>
                    <circle cx="50" cy="50" r="1" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#values-pattern)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold mb-6 shadow-xl">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                Nilai Inti Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Apa <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Mendorong Kami</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Prinsip-prinsip dasar ini memandu semua yang kami lakukan dan membentuk cara kami bekerja dengan klien kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1: Innovation -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                <!-- Card Background with Gradient Border -->
                <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <!-- Main Card -->
                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 p-8 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Inovasi</h3>
                    <p class="text-gray-600 leading-relaxed">Kami selalu mengikuti tren teknologi untuk memberikan solusi mutakhir yang memberi Anda keunggulan kompetitif.</p>
                </div>
            </div>

            <!-- Value 2: Quality -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-r from-green-400 via-emerald-500 to-teal-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 p-8 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Kualitas</h3>
                    <p class="text-gray-600 leading-relaxed">Kami memberikan pekerjaan berkualitas tinggi yang melampaui harapan melalui pengujian yang ketat dan perhatian terhadap detail.</p>
                </div>
            </div>

            <!-- Value 3: Transparency -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 p-8 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Transparansi</h3>
                    <p class="text-gray-600 leading-relaxed">Kami menjaga komunikasi terbuka di setiap proyek, membuat Anda tetap mendapat informasi di setiap langkah.</p>
                </div>
            </div>

            <!-- Value 4: Partnership -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="400">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 p-8 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Kemitraan</h3>
                    <p class="text-gray-600 leading-relaxed">Kami bekerja sebagai perpanjangan dari tim Anda, memahami tujuan Anda dan bekerja sama untuk mencapainya.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Enhanced Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Temui Tim Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Orang-Orang di Balik Anda <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Kesuksesan</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Tim pengembang, desainer, dan ahli strategi kami yang berbakat bekerja sama untuk mewujudkan visi Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                <!-- Card Background with Gradient Border -->
                <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <!-- Main Card -->
                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                    <!-- Profile Image Section -->
                    <div class="relative p-8 text-center">
                        <div class="relative inline-block mb-6">
                            <div class="w-32 h-32 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full mx-auto overflow-hidden ring-4 ring-primary-100 group-hover:ring-primary-200 transition-all duration-300">
                                <img src="{{ asset('images/team-1.jpg') }}" alt="John Doe" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <!-- Status Indicator -->
                            <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-400 rounded-full border-4 border-white"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">John Doe</h3>
                        <p class="text-primary-600 font-semibold mb-3">Lead Developer</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Spesialis dalam pengembangan tumpukan penuh dengan pengalaman 8+ tahun di Laravel dan React. Bersemangat tentang kode bersih dan arsitektur yang dapat diskalakan.</p>

                        <!-- Skills -->
                        <div class="flex flex-wrap gap-2 justify-center mb-6">
                            <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">Laravel</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">React</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">Vue.js</span>
                        </div>

                        <!-- Social Links -->
                        <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="w-10 h-10 bg-gradient-to-r from-primary-500 to-purple-600 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gradient-to-r from-gray-700 to-gray-900 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-r from-green-400 via-emerald-500 to-teal-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                    <div class="relative p-8 text-center">
                        <div class="relative inline-block mb-6">
                            <div class="w-32 h-32 bg-gradient-to-br from-pink-400 to-purple-600 rounded-full mx-auto overflow-hidden ring-4 ring-pink-100 group-hover:ring-pink-200 transition-all duration-300">
                                <img src="{{ asset('images/team-2.jpg') }}" alt="Jane Smith" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-400 rounded-full border-4 border-white"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Jane Smith</h3>
                        <p class="text-primary-600 font-semibold mb-3">UI/UX Designer</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Menciptakan pengalaman pengguna yang indah dan intuitif dengan fokus pada pengoptimalan konversi dan prinsip desain yang berpusat pada pengguna.</p>

                        <div class="flex flex-wrap gap-2 justify-center mb-6">
                            <span class="px-3 py-1 bg-gradient-to-r from-pink-100 to-purple-100 text-pink-700 text-xs rounded-full font-medium border border-pink-200">Figma</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-pink-100 to-purple-100 text-pink-700 text-xs rounded-full font-medium border border-pink-200">Adobe XD</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-pink-100 to-purple-100 text-pink-700 text-xs rounded-full font-medium border border-pink-200">Sketch</span>
                        </div>

                        <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="w-10 h-10 bg-gradient-to-r from-pink-500 to-purple-600 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gradient-to-r from-pink-600 to-red-600 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.014 5.367 18.647.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.596-3.205-1.534l1.18-.906c.423.636 1.146 1.06 1.987 1.06 1.297 0 2.356-1.059 2.356-2.356s-1.059-2.356-2.356-2.356c-.841 0-1.564.424-1.987 1.06l-1.18-.906c.757-.938 1.908-1.534 3.205-1.534 2.297 0 4.158 1.861 4.158 4.158s-1.861 4.158-4.158 4.158z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                    <div class="relative p-8 text-center">
                        <div class="relative inline-block mb-6">
                            <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full mx-auto overflow-hidden ring-4 ring-green-100 group-hover:ring-green-200 transition-all duration-300">
                                <img src="{{ asset('images/team-3.jpg') }}" alt="Mike Johnson" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-400 rounded-full border-4 border-white"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Mike Johnson</h3>
                        <p class="text-primary-600 font-semibold mb-3">Mobile Developer</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Ahli dalam pengembangan React Native dan Flutter untuk aplikasi seluler lintas platform dengan kinerja asli.</p>

                        <div class="flex flex-wrap gap-2 justify-center mb-6">
                            <span class="px-3 py-1 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 text-xs rounded-full font-medium border border-green-200">React Native</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 text-xs rounded-full font-medium border border-green-200">Flutter</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 text-xs rounded-full font-medium border border-green-200">Swift</span>
                        </div>

                        <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gradient-to-r from-gray-800 to-black rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-24 bg-gradient-to-br from-gray-900 via-primary-900 to-purple-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-primary-400/30 to-blue-400/30 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-400/30 to-pink-400/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-lg rounded-full text-sm font-bold text-white mb-6 border border-white/20">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                Prestasi Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">
                Angka Itu <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Berbicara</span>
            </h2>
            <p class="text-xl text-blue-100 max-w-4xl mx-auto leading-relaxed">Rekam jejak kami menunjukkan komitmen kami untuk memberikan hasil yang luar biasa bagi klien kami.</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Stat 1 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative mb-6">
                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300 border border-white/20">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_projects', '100+') }}</div>
                <div class="text-blue-200 font-medium">Project Selesai</div>
            </div>

            <!-- Stat 2 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative mb-6">
                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300 border border-white/20">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_clients', '50+') }}</div>
                <div class="text-blue-200 font-medium">Klien yang Bahagia</div>
            </div>

            <!-- Stat 3 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="relative mb-6">
                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300 border border-white/20">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_experience', '5+') }}</div>
                <div class="text-blue-200 font-medium">Pengalaman Bertahun-tahun</div>
            </div>

            <!-- Stat 4 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                <div class="relative mb-6">
                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300 border border-white/20">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ \App\Models\Setting::get('stat_satisfaction', '99%') }}</div>
                <div class="text-blue-200 font-medium">Kepuasan Klien</div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-3">
        <svg class="w-full h-full" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="choose-us-pattern" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="2" fill="currentColor"/>
                    <circle cx="10" cy="10" r="1" fill="currentColor"/>
                    <circle cx="50" cy="50" r="1" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#choose-us-pattern)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                    Mengapa Memilih Kami
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Apa yang Membuat Kita <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Berbeda</span>
                </h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">Kami tidak hanya membangun situs web dan aplikasi – kami menciptakan pengalaman digital yang menghasilkan hasil bisnis nyata.</p>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Teknologi Mutakhir</h4>
                            <p class="text-gray-600 leading-relaxed">Kami menggunakan teknologi dan kerangka kerja terbaru untuk memastikan proyek Anda tahan masa depan dan dapat diskalakan.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Tepat Waktu</h4>
                            <p class="text-gray-600 leading-relaxed">Kami memahami bahwa tenggat waktu itu penting. Manajemen proyek kami yang telah terbukti memastikan pengiriman tepat waktu setiap saat.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Dukungan Khusus</h4>
                            <p class="text-gray-600 leading-relaxed">Hubungan kami tidak berakhir saat peluncuran. Kami menyediakan dukungan dan pemeliharaan berkelanjutan demi ketenangan pikiran Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="relative">
                <!-- Process Flow -->
                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100 shadow-2xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Proses Kami</h3>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-primary-600 to-purple-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 shadow-lg">1</div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Penemuan & Perencanaan</h4>
                                <p class="text-gray-600 text-sm">Kami memahami tujuan Anda dan membuat peta jalan yang terperinci</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 shadow-lg">2</div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Desain & Prototype</h4>
                                <p class="text-gray-600 text-sm">Membuat wireframe dan Prototype interaktif</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 shadow-lg">3</div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Perkembangan</h4>
                                <p class="text-gray-600 text-sm">Membangun dengan kode bersih dan praktik terbaik</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-pink-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 shadow-lg">4</div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Pengujian & Peluncuran</h4>
                                <p class="text-gray-600 text-sm">Pengujian menyeluruh sebelum penerapan yang berhasil</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl opacity-80 animate-float"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full opacity-60 animate-float animation-delay-2000"></div>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Siap Memulai Perjalanan Anda?
            </div>

            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 leading-tight">
                Mari Membangun Anda
                <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-pink-500 bg-clip-text text-transparent">
                    Sukses Digital
                </span>
            </h2>

            <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 mb-12 max-w-5xl mx-auto leading-relaxed font-light">
                Bermitra dengan tim yang memahami visi Anda dan memiliki keahlian untuk mewujudkannya
            </p>

            <div class="flex flex-col sm:flex-row gap-8 justify-center items-center mb-16">
                <a href="{{ route('contact') }}"
                   class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-2xl font-black text-xl hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl hover:shadow-3xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="relative z-10">Hubungi Kami</span>
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

/* Enhanced Card Hover Effects */
.team-member-card,
.value-card {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.team-member-card:hover,
.value-card:hover {
    transform: translateY(-12px) rotateX(5deg);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
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

/* Responsive Design Enhancements */
@media (max-width: 768px) {
    .team-member-card:hover,
    .value-card:hover {
        transform: translateY(-8px);
    }
}

/* Print Styles */
@media print {
    .team-member-card,
    .value-card {
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
    const animatedElements = document.querySelectorAll('[data-aos]');
    animatedElements.forEach(el => {
        observer.observe(el);
    });

    // Counter animation for stats
    const counters = document.querySelectorAll('[data-aos-delay="400"] .text-4xl, [data-aos-delay="100"] .text-4xl, [data-aos-delay="200"] .text-4xl, [data-aos-delay="300"] .text-4xl');
    const animateCounter = (counter) => {
        const text = counter.textContent;
        const target = parseInt(text.replace(/\D/g, ''));
        const suffix = text.replace(/[0-9]/g, '');
        const increment = target / 100;
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current) + suffix;
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + suffix;
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

    const statsSection = document.querySelector('.py-24.bg-gradient-to-br.from-gray-900');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Enhanced hover effects for cards
    const cards = document.querySelectorAll('.group.relative[data-aos]');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) rotateX(5deg)';
            this.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
        });

        card.addEventListener('mouseleave', function() {
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

    // Social media links functionality
    const socialLinks = document.querySelectorAll('a[href="#"]');
    socialLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            // Add your social media URLs here
            console.log('Social media link clicked');
        });
    });

    // Enhanced loading animation
    const observer2 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });

    // Add loading animation to all sections
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer2.observe(section);
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
