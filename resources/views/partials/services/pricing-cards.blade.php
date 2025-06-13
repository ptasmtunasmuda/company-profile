<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @php
        $pricingPlans = [
            [
                'name' => 'Paket Pemula',
                'description' => 'Sempurna untuk usaha kecil',
                'price' => 'Rp2,999,000',
                'period' => 'Pembayaran satu kali',
                'features' => [
                    'Basic Website/App',
                    'Responsive design',
                    'Basic SEO setup',
                    '30 days support'
                ],
                'buttonText' => 'Memulai',
                'buttonColor' => 'bg-gray-900 hover:bg-gray-800',
                'popular' => false,
                'delay' => 100
            ],
            [
                'name' => 'Profesional',
                'description' => 'Untuk bisnis yang sedang berkembang',
                'price' => 'Rp7,999,000',
                'period' => 'Pembayaran satu kali',
                'features' => [
                    'Fungsionalitas tingkat lanjut',
                    'Desain khusus',
                    'Integrasi CMS',
                    'SEO tingkat lanjut',
                    'Dukungan 90 hari'
                ],
                'buttonText' => 'Memulai',
                'buttonColor' => 'bg-white text-primary-600 hover:bg-gray-50',
                'popular' => true,
                'delay' => 200
            ],
            [
                'name' => 'Perusahaan',
                'description' => 'Untuk organisasi besar',
                'price' => 'Custom',
                'period' => 'Mari berdiskusi',
                'features' => [
                    'Fitur tidak terbatas',
                    'Solusi khusus',
                    'Integrasi API',
                    'Dukungan prioritas',
                    'Manajer yang berdedikasi'
                ],
                'buttonText' => 'Hubungi kami',
                'buttonColor' => 'bg-gray-900 hover:bg-gray-800',
                'popular' => false,
                'delay' => 300
            ]
        ];
    @endphp

    @foreach($pricingPlans as $plan)
        <div class="relative {{ $plan['popular'] ? 'bg-gradient-to-br from-primary-600 to-primary-700 text-white transform scale-105' : 'bg-white' }} rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 hover:border-primary-300 p-8" data-aos="fade-up" data-aos-delay="{{ $plan['delay'] }}">

            @if($plan['popular'])
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-yellow-400 text-yellow-900 px-4 py-2 rounded-full text-sm font-semibold">Paling Populer</span>
                </div>
            @endif

            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold mb-2">{{ $plan['name'] }}</h3>
                <p class="{{ $plan['popular'] ? 'text-blue-100' : 'text-gray-600' }} mb-4">{{ $plan['description'] }}</p>
                <div class="text-4xl font-bold mb-2">{{ $plan['price'] }}</div>
                <p class="{{ $plan['popular'] ? 'text-blue-200' : 'text-gray-500' }} text-sm">{{ $plan['period'] }}</p>
            </div>

            <ul class="space-y-4 mb-8">
                @foreach($plan['features'] as $feature)
                    <li class="flex items-center">
                        <svg class="w-5 h-5 {{ $plan['popular'] ? 'text-green-400' : 'text-green-500' }} mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="{{ $plan['popular'] ? 'text-blue-100' : 'text-gray-600' }}">{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>

            <a href="{{ route('contact') }}" class="w-full {{ $plan['buttonColor'] }} py-3 px-6 rounded-xl font-semibold transition-colors duration-300 text-center block">
                {{ $plan['buttonText'] }}
            </a>
        </div>
    @endforeach
</div>
