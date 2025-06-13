<section class="py-20 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                </svg>
                Layanan kami
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Apa yang Kami Tawarkan</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Kami menawarkan solusi digital yang komprehensif untuk membantu bisnis Anda tumbuh dan sukses di dunia modern.</p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $services = [
                    [
                        'title' => 'Website Development',
                        'description' => 'Situs website khusus yang dibuat dengan teknologi modern seperti Laravel, React, dan Vue.js. Responsif, cepat, dan dioptimalkan untuk SEO.',
                        'iconColor' => 'from-primary-500 to-primary-700',
                        'iconPath' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'delay' => 100
                    ],
                    [
                        'title' => 'Mobile App Development',
                        'description' => 'Aplikasi mobile dan lintas platform untuk iOS dan Android menggunakan teknologi React Native dan Flutter.',
                        'iconColor' => 'from-green-500 to-emerald-600',
                        'iconPath' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                        'delay' => 200
                    ],
                    [
                        'title' => 'E-Commerce Solutions',
                        'description' => 'Toko online lengkap dengan integrasi pembayaran, manajemen inventaris, dan sistem hubungan pelanggan.',
                        'iconColor' => 'from-purple-500 to-pink-600',
                        'iconPath' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                        'delay' => 300
                    ],
                    [
                        'title' => 'UI/UX Design',
                        'description' => 'Antarmuka pengguna yang modern dan intuitif yang berfokus pada pengalaman pengguna dan pengoptimalan konversi.',
                        'iconColor' => 'from-yellow-500 to-orange-600',
                        'iconPath' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z',
                        'delay' => 400
                    ],
                    [
                        'title' => 'Digital Marketing',
                        'description' => 'Optimasi SEO, pemasaran media sosial, dan periklanan digital untuk menjangkau lebih banyak pelanggan.',
                        'iconColor' => 'from-red-500 to-pink-600',
                        'iconPath' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                        'delay' => 500
                    ],
                    [
                        'title' => 'Maintenance & Support',
                        'description' => 'Pemeliharaan berkelanjutan, pembaruan, dan dukungan teknis untuk menjaga aset digital Anda berjalan lancar.',
                        'iconColor' => 'from-indigo-500 to-purple-600',
                        'iconPath' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065zM15 12a3 3 0 11-6 0 3 3 0 016 0z',
                        'delay' => 600
                    ]
                ];
            @endphp

            @foreach($services as $service)
                <div class="service-card group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br {{ $service['iconColor'] }} rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['iconPath'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $service['description'] }}</p>
                        <div class="mt-6 flex items-center text-primary-600 font-medium opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            Pelajari lebih lanjut
                            @include('partials.icons.arrow-right')
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('services') }}"
               class="inline-flex items-center px-8 py-4 bg-primary-600 text-white rounded-2xl font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                Lihat Semua Layanan
                @include('partials.icons.arrow-right')
            </a>
        </div>
    </div>
</section>
