<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
                Paket Harga
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Pilihan <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Terbaik</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Harga transparan dengan paket yang disesuaikan kebutuhan bisnis Anda
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @php
                $pricingPlans = [
                    [
                        'name' => 'Starter',
                        'description' => 'Untuk bisnis kecil yang baru memulai',
                        'price' => 2999000,
                        'price_display' => 'Rp 2.999.000',
                        'period' => 'paket',
                        'features' => [
                            'Website Responsif',
                            'Domain & Hosting 1 Tahun',
                            'Desain Custom',
                            '5 Halaman',
                            'SEO Basic',
                            'Support 30 Hari'
                        ],
                        'color' => 'border-gray-200',
                        'bgColor' => 'bg-white',
                        'textColor' => 'text-gray-900',
                        'buttonColor' => 'bg-gray-900 hover:bg-gray-800 text-white',
                        'popular' => false,
                        'delay' => 100
                    ],
                    [
                        'name' => 'Professional',
                        'description' => 'Untuk bisnis yang berkembang',
                        'price' => 7999000,
                        'price_display' => 'Rp 7.999.000',
                        'period' => 'paket',
                        'features' => [
                            'Website + Mobile App',
                            'Domain & Hosting 1 Tahun',
                            'Desain Premium',
                            '10 Halaman',
                            'SEO Advanced',
                            'CMS Integration',
                            'Analytics Setup',
                            'Support 90 Hari'
                        ],
                        'color' => 'border-primary-500',
                        'bgColor' => 'bg-gradient-to-br from-primary-600 to-primary-700',
                        'textColor' => 'text-white',
                        'buttonColor' => 'bg-white hover:bg-gray-100 text-primary-600',
                        'popular' => true,
                        'delay' => 200
                    ],
                    [
                        'name' => 'Enterprise',
                        'description' => 'Untuk perusahaan besar',
                        'price' => null,
                        'price_display' => 'Custom',
                        'period' => 'konsultasi',
                        'features' => [
                            'Solusi Custom',
                            'Multi-platform App',
                            'Advanced Integrations',
                            'Unlimited Pages',
                            'Enterprise SEO',
                            'Dedicated Manager',
                            'Priority Support',
                            'Maintenance 1 Tahun'
                        ],
                        'color' => 'border-gray-200',
                        'bgColor' => 'bg-white',
                        'textColor' => 'text-gray-900',
                        'buttonColor' => 'bg-gray-900 hover:bg-gray-800 text-white',
                        'popular' => false,
                        'delay' => 300
                    ]
                ];
            @endphp

            @foreach($pricingPlans as $plan)
                <div class="relative {{ $plan['bgColor'] }} {{ $plan['textColor'] }} rounded-3xl p-8 {{ $plan['color'] }} border-2 shadow-lg hover:shadow-2xl transition-all duration-500 {{ $plan['popular'] ? 'transform scale-105' : 'hover:scale-105' }}" data-aos="fade-up" data-aos-delay="{{ $plan['delay'] }}">

                    @if($plan['popular'])
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                🔥 Paling Populer
                            </span>
                        </div>
                    @endif

                    <!-- Plan Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-2">{{ $plan['name'] }}</h3>
                        <p class="{{ $plan['popular'] ? 'text-blue-100' : 'text-gray-600' }} mb-6">{{ $plan['description'] }}</p>

                        <div class="mb-2">
                            <div class="text-4xl font-black">{{ $plan['price_display'] }}</div>
                        </div>
                        <p class="{{ $plan['popular'] ? 'text-blue-200' : 'text-gray-500' }} text-sm">per {{ $plan['period'] }}</p>
                    </div>

                    <!-- Features List -->
                    <ul class="space-y-4 mb-8">
                        @foreach($plan['features'] as $feature)
                            <li class="flex items-center">
                                <svg class="w-5 h-5 {{ $plan['popular'] ? 'text-green-400' : 'text-green-500' }} mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="{{ $plan['popular'] ? 'text-blue-100' : 'text-gray-600' }} text-sm">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <!-- CTA Button -->
                    <a href="{{ route('contact') }}" class="w-full {{ $plan['buttonColor'] }} py-4 px-6 rounded-xl font-bold text-center block transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        {{ $plan['price'] === null ? 'Konsultasi Gratis' : 'Pilih Paket' }}
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-16" data-aos="fade-up">
            <p class="text-gray-600 mb-4">
                🎁 <strong>Bonus:</strong> Konsultasi gratis, revisi unlimited, dan garansi bug-fix 30 hari
            </p>
            <a href="{{ route('contact') }}" class="text-primary-600 hover:text-primary-700 font-semibold">
                Butuh paket custom? Hubungi kami →
            </a>
        </div>
    </div>
</section>
