<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Background Blobs -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-4 -left-4 w-72 h-72 bg-gradient-to-br from-primary-200/30 to-purple-300/30 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-yellow-200/30 to-pink-300/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-gradient-to-br from-blue-200/30 to-green-300/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold mb-6 shadow-xl">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Layanan Unggulan
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Solusi <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Terpopuler</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Layanan-layanan pilihan yang paling banyak diminati klien kami
            </p>
        </div>

        <!-- Featured Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $featuredServices = [
                    [
                        'title' => 'Web Development',
                        'description' => 'Pengembangan website modern dan responsif dengan teknologi terkini seperti Laravel, React, dan Vue.js.',
                        'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'color' => 'from-blue-500 to-blue-700',
                        'bg' => 'from-blue-50 to-blue-100',
                        'delay' => 100
                    ],
                    [
                        'title' => 'Mobile App Development',
                        'description' => 'Aplikasi mobile iOS dan Android dengan performa tinggi menggunakan React Native dan Flutter.',
                        'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                        'color' => 'from-green-500 to-green-700',
                        'bg' => 'from-green-50 to-green-100',
                        'delay' => 200
                    ],
                    [
                        'title' => 'UI/UX Design',
                        'description' => 'Desain antarmuka yang menarik dan pengalaman pengguna yang optimal untuk semua platform.',
                        'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z',
                        'color' => 'from-purple-500 to-purple-700',
                        'bg' => 'from-purple-50 to-purple-100',
                        'delay' => 300
                    ]
                ];
            @endphp

            @foreach($featuredServices as $service)
                <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">
                    <!-- Service Icon -->
                    <div class="w-16 h-16 bg-gradient-to-br {{ $service['color'] }} rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"></path>
                        </svg>
                    </div>

                    <!-- Service Content -->
                    <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">
                        {{ $service['title'] }}
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ $service['description'] }}
                    </p>

                    <!-- CTA Button -->
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                        <span>Pelajari Lebih Lanjut</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                    <!-- Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br {{ $service['bg'] }} rounded-3xl opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>
