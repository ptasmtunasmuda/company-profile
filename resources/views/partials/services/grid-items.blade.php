<div class="service-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="service-grid">
    @php
        $allServices = [
            [
                'title' => 'Web Development',
                'description' => 'Situs web modern dan responsif yang menggunakan teknologi mutakhir. Cepat, aman, dan dioptimalkan untuk SEO.',
                'technologies' => ['Laravel', 'React', 'Vue.js'],
                'iconColor' => 'from-primary-500 to-primary-700',
                'bgColor' => 'from-primary-50/50 to-purple-50/50',
                'iconPath' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                'category' => 'development',
                'delay' => 100
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Aplikasi mobile lintas platform untuk iOS dan Android dengan kinerja asli.',
                'technologies' => ['React Native', 'Flutter', 'Swift'],
                'iconColor' => 'from-green-500 to-emerald-600',
                'bgColor' => 'from-green-50/50 to-emerald-50/50',
                'iconPath' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                'category' => 'development',
                'delay' => 200
            ],
            [
                'title' => 'E-Commerce Solutions',
                'description' => 'Solusi toko online lengkap dengan gateway pembayaran dan manajemen inventaris.',
                'technologies' => ['WooCommerce', 'Shopify', 'Magento'],
                'iconColor' => 'from-purple-500 to-pink-600',
                'bgColor' => 'from-purple-50/50 to-pink-50/50',
                'iconPath' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                'category' => 'development',
                'delay' => 300
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Antarmuka pengguna yang intuitif berfokus pada pengalaman pengguna dan pengoptimalan konversi.',
                'technologies' => ['Figma', 'Adobe XD', 'Sketch'],
                'iconColor' => 'from-yellow-500 to-orange-600',
                'bgColor' => 'from-yellow-50/50 to-orange-50/50',
                'iconPath' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z',
                'category' => 'design',
                'delay' => 400
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Optimasi SEO, pemasaran media sosial, dan strategi periklanan digital.',
                'technologies' => ['SEO', 'Google Ads', 'Social Media'],
                'iconColor' => 'from-red-500 to-pink-600',
                'bgColor' => 'from-red-50/50 to-pink-50/50',
                'iconPath' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                'category' => 'marketing',
                'delay' => 500
            ],
            [
                'title' => 'Pemeliharaan & Dukungan',
                'description' => 'Dukungan teknis, pembaruan, dan pemeliharaan 24/7 untuk menjaga sistem Anda berjalan lancar.',
                'technologies' => ['24/7 Dukungan', 'Updates', 'Monitoring'],
                'iconColor' => 'from-indigo-500 to-blue-600',
                'bgColor' => 'from-indigo-50/50 to-blue-50/50',
                'iconPath' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065zM15 12a3 3 0 11-6 0 3 3 0 016 0z',
                'category' => 'support',
                'delay' => 600
            ]
        ];
    @endphp

    @foreach($allServices as $service)
        <div class="service-item group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2 overflow-hidden"
             data-category="{{ $service['category'] }}"
             data-aos="fade-up"
             data-aos-delay="{{ $service['delay'] }}">

            <div class="absolute inset-0 bg-gradient-to-br {{ $service['bgColor'] }} rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <div class="relative z-10">
                <div class="relative overflow-hidden rounded-t-3xl p-8">
                    <div class="w-20 h-20 bg-gradient-to-br {{ $service['iconColor'] }} rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['iconPath'] }}"></path>
                        </svg>
                    </div>

                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                            {{ ucfirst($service['category']) }}
                        </span>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                        {{ $service['title'] }}
                    </h3>

                    <p class="text-gray-600 mb-4 leading-relaxed line-clamp-2">{{ $service['description'] }}</p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(array_slice($service['technologies'], 0, 3) as $tech)
                            <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full font-medium">{{ $tech }}</span>
                        @endforeach
                        @if(count($service['technologies']) > 3)
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium">+{{ count($service['technologies']) - 3 }}</span>
                        @endif
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                            <span>Dapatkan Penawaran</span>
                            @include('partials.icons.arrow-right')
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
    @endforeach
</div>
