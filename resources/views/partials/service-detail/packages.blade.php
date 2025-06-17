<section id="packages" class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-100 to-orange-100 text-orange-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
                Paket Harga
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Pilih
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Paket Terbaik
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Pilihan paket yang disesuaikan dengan kebutuhan dan budget bisnis Anda
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-{{ count($service['packages']) == 2 ? '2' : '3' }} gap-8 max-w-6xl mx-auto">
            @foreach($service['packages'] as $index => $package)
                <div class="relative bg-white rounded-3xl p-8 border-2 {{ $index == 1 ? 'border-primary-500 transform scale-105' : 'border-gray-200' }} shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">

                    @if($index == 1)
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-6 py-2 rounded-full text-sm font-bold shadow-xl">
                                🔥 Paling Populer
                            </span>
                        </div>
                    @endif

                    <!-- Package Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-2 {{ $index == 1 ? 'text-primary-600' : 'text-gray-900' }}">{{ $package['name'] }}</h3>

                        <div class="mb-2">
                            <div class="text-4xl font-black {{ $index == 1 ? 'text-primary-600' : 'text-gray-900' }}">{{ $package['price'] }}</div>
                        </div>
                        <p class="text-gray-500 text-sm">{{ $package['duration'] }}</p>
                    </div>

                    <!-- Features List -->
                    <ul class="space-y-4 mb-8">
                        @foreach($package['features'] as $feature)
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Ideal For -->
                    <div class="mb-6 p-4 bg-gray-50 rounded-xl">
                        <h4 class="font-semibold text-gray-700 mb-2 text-sm">Ideal untuk:</h4>
                        <p class="text-gray-600 text-sm">{{ $package['ideal_for'] }}</p>
                    </div>

                    <!-- CTA Button -->
                    <a href="{{ route('contact') }}" class="w-full {{ $index == 1 ? 'bg-gradient-to-r from-primary-600 to-purple-600 text-white' : 'bg-gray-900 text-white' }} py-4 px-6 rounded-xl font-bold text-center block transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Pilih Paket Ini
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-20" data-aos="fade-up">
            <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100 max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    🎁 Bonus Eksklusif
                </h3>
                <p class="text-gray-600 mb-6">
                    <strong>Gratis:</strong> Konsultasi awal, revisi unlimited hingga approved, garansi bug-fix 30 hari, dan training penggunaan sistem
                </p>
                <a href="{{ route('contact') }}" class="text-primary-600 hover:text-primary-700 font-semibold inline-flex items-center">
                    Butuh paket custom? Hubungi kami
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
