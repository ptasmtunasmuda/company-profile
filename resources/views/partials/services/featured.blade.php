@php
use Illuminate\Support\Str;
@endphp

<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold mb-8 shadow-xl">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Layanan Unggulan
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Solusi
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Terpopuler
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Layanan-layanan pilihan yang paling banyak diminati dan terbukti memberikan hasil optimal untuk klien kami
            </p>
        </div>

        <!-- Featured Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $featuredServices = [
                    [
                        'title' => 'Website Development',
                        'slug' => 'website-development',
                        'description' => 'Pengembangan website modern dan responsif dengan teknologi terkini seperti Laravel, React, dan Vue.js untuk performa optimal.',
                        'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'color' => 'from-blue-500 to-blue-700',
                        'borderColor' => 'from-blue-400 via-blue-500 to-blue-600',
                        'delay' => 100
                    ],
                    [
                        'title' => 'Mobile Application',
                        'slug' => 'mobile-application',
                        'description' => 'Aplikasi mobile iOS dan Android dengan performa tinggi menggunakan React Native dan Flutter untuk jangkauan maksimal.',
                        'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                        'color' => 'from-purple-500 to-purple-700',
                        'borderColor' => 'from-purple-400 via-pink-500 to-red-500',
                        'delay' => 200
                    ],
                    [
                        'title' => 'UI/UX Design',
                        'slug' => 'ui-ux-design',
                        'description' => 'Desain antarmuka yang menarik dan pengalaman pengguna yang optimal untuk meningkatkan konversi dan kepuasan user.',
                        'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z',
                        'color' => 'from-green-500 to-green-700',
                        'borderColor' => 'from-green-400 via-emerald-500 to-teal-500',
                        'delay' => 300
                    ]
                ];
            @endphp

            @foreach($featuredServices as $service)
                <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">
                    <!-- Background border effect -->
                    <div class="absolute inset-0 bg-gradient-to-r {{ $service['borderColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <!-- Main card -->
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                        <!-- Top gradient accent -->
                        <div class="h-2 bg-gradient-to-r {{ $service['color'] }}"></div>

                        <div class="p-8">
                            <!-- Service Icon -->
                            <div class="w-16 h-16 bg-gradient-to-br {{ $service['color'] }} rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"></path>
                                </svg>
                            </div>

                            <!-- Service Content -->
                            <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                                {{ $service['description'] }}
                            </p>

                            <!-- CTA Button -->
                            <a href="{{ route('services.show', ['slug' => $service['slug']]) }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                <span>Pelajari Lebih Lanjut</span>
                                <svg class="w-5 h-5 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>

                            <!-- Bottom accent line -->
                            <div class="mt-6 w-16 h-1 bg-gradient-to-r {{ $service['color'] }} rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-20" data-aos="fade-up" data-aos-delay="400">
            <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Butuh Solusi Khusus?
                </h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Setiap bisnis memiliki kebutuhan unik. Konsultasikan kebutuhan spesifik Anda dengan tim ahli kami.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-bold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Konsultasi Gratis
                    <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
