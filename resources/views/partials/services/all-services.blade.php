@php
use Illuminate\Support\Str;
@endphp

<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Semua Layanan
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Portfolio
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Lengkap
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Jelajahi semua layanan yang kami tawarkan untuk kebutuhan digital komprehensif bisnis Anda
            </p>
        </div>

        <!-- Service Filter -->
        <div class="flex flex-wrap justify-center gap-4 mb-16" data-aos="fade-up">
            <button class="service-filter active px-8 py-4 bg-primary-600 text-white rounded-full font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105 shadow-lg" data-filter="all">
                Semua Layanan
            </button>
            <button class="service-filter px-8 py-4 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="development">
                Development
            </button>
            <button class="service-filter px-8 py-4 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="design">
                Design
            </button>
            <button class="service-filter px-8 py-4 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105" data-filter="marketing">
                Marketing
            </button>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="services-grid">
            @php
                $allServices = [
                    [
                        'title' => 'Website Development',
                        'slug' => 'website-development',
                        'description' => 'Pengembangan website responsif dengan teknologi modern dan performa optimal untuk semua perangkat.',
                        'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'category' => 'development',
                        'price' => 'Mulai 3jt',
                        'features' => ['Responsive Design', 'SEO Optimized', 'Fast Loading', 'Mobile Friendly'],
                        'color' => 'from-blue-500 to-blue-700',
                        'borderColor' => 'from-blue-400 via-blue-500 to-blue-600'
                    ],
                    [
                        'title' => 'E-Commerce Platform',
                        'slug' => 'ecommerce-platform',
                        'description' => 'Toko online lengkap dengan sistem pembayaran terintegrasi dan manajemen inventory yang canggih.',
                        'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                        'category' => 'development',
                        'price' => 'Mulai 9jt',
                        'features' => ['Payment Gateway', 'Inventory Management', 'Analytics', 'Multi-vendor'],
                        'color' => 'from-green-500 to-green-700',
                        'borderColor' => 'from-green-400 via-emerald-500 to-teal-500'
                    ],
                    [
                        'title' => 'Mobile Application',
                        'slug' => 'mobile-application',
                        'description' => 'Aplikasi mobile iOS dan Android dengan teknologi cross-platform untuk reach yang maksimal.',
                        'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                        'category' => 'development',
                        'price' => 'Mulai 13jt',
                        'features' => ['Cross Platform', 'Push Notifications', 'Offline Support', 'App Store Ready'],
                        'color' => 'from-purple-500 to-purple-700',
                        'borderColor' => 'from-purple-400 via-pink-500 to-red-500'
                    ],
                    [
                        'title' => 'UI/UX Design',
                        'slug' => 'ui-ux-design',
                        'description' => 'Desain antarmuka yang menarik dan user-friendly dengan fokus pada user experience optimal.',
                        'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z',
                        'category' => 'design',
                        'price' => 'Mulai 4jt',
                        'features' => ['User Research', 'Prototyping', 'Usability Testing', 'Design System'],
                        'color' => 'from-pink-500 to-pink-700',
                        'borderColor' => 'from-pink-400 via-rose-500 to-red-500'
                    ],
                    [
                        'title' => 'Brand Identity',
                        'slug' => 'brand-identity',
                        'description' => 'Pembuatan logo dan identitas visual brand yang memorable dan profesional.',
                        'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                        'category' => 'design',
                        'price' => 'Mulai 2jt',
                        'features' => ['Logo Design', 'Brand Guidelines', 'Stationery', 'Brand Strategy'],
                        'color' => 'from-yellow-500 to-orange-500',
                        'borderColor' => 'from-yellow-400 via-orange-500 to-red-500'
                    ],
                    [
                        'title' => 'Digital Marketing',
                        'slug' => 'digital-marketing',
                        'description' => 'Strategi pemasaran digital komprehensif untuk meningkatkan brand awareness dan penjualan.',
                        'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                        'category' => 'marketing',
                        'price' => 'Mulai 3jt/bulan',
                        'features' => ['Social Media', 'Google Ads', 'Content Marketing', 'Analytics'],
                        'color' => 'from-red-500 to-red-700',
                        'borderColor' => 'from-red-400 via-pink-500 to-purple-500'
                    ]
                ];
            @endphp

            @foreach($allServices as $index => $service)
                <div class="service-item group relative"
                        data-category="{{ $service['category'] }}"
                        data-aos="fade-up"
                        data-aos-delay="{{ ($index % 3) * 100 + 100 }}">

                    <!-- Background border effect -->
                    <div class="absolute inset-0 bg-gradient-to-r {{ $service['borderColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <!-- Main card -->
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                        <!-- Top gradient accent -->
                        <div class="h-2 bg-gradient-to-r {{ $service['color'] }}"></div>

                        <div class="p-6">
                            <!-- Service Icon -->
                            <div class="w-14 h-14 bg-gradient-to-br {{ $service['color'] }} rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300 shadow-xl">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"></path>
                                </svg>
                            </div>

                            <!-- Service Content -->
                            <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                {{ $service['description'] }}
                            </p>

                            <!-- Features -->
                            <ul class="space-y-1 mb-4">
                                @foreach($service['features'] as $feature)
                                    <li class="flex items-center text-xs text-gray-600">
                                        <svg class="w-3 h-3 text-green-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Price and CTA -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <span class="text-primary-600 font-bold text-sm">{{ $service['price'] }}</span>
                                <a href="{{ route('services.show', $service['slug']) }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 text-xs group/link">
                                    <span>Pelajari</span>
                                    <svg class="w-3 h-3 ml-1 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Bottom accent line -->
                            <div class="mt-4 w-16 h-1 bg-gradient-to-r {{ $service['color'] }} rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16" data-aos="fade-up">
            <button id="load-more-services" class="inline-flex items-center px-10 py-5 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Lihat Layanan Lainnya
                <svg class="w-5 h-5 ml-3 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </button>
        </div>
    </div>
</section>
