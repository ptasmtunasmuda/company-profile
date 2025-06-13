<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- About Image -->
            <div data-aos="fade-right" class="relative">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-blue-500 rounded-3xl transform -rotate-6 opacity-20"></div>
                    <img src="{{ \App\Models\Setting::get('about_image', asset('images/about-image.jpg')) }}" alt="About Us"
                        class="relative rounded-3xl shadow-2xl w-full h-auto transform rotate-2 hover:rotate-0 transition-transform duration-500">
                </div>

                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            @include('partials.icons.check')
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">{{ $stats->satisfaction }}</div>
                            <div class="text-sm text-gray-600">Kepuasan Klien</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Content -->
            <div data-aos="fade-left" class="space-y-8">
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                        @include('partials.icons.info')
                        {{ $aboutContent->subtitle }}
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">{{ $aboutContent->title }}</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">{{ $aboutContent->description }}</p>
                </div>

                <!-- Features -->
                <div class="space-y-4">
                    @php
                        $features = [
                            [
                                'title' => 'Tim Ahli',
                                'description' => 'Pengembang dan desainer berpengalaman yang selalu mengikuti perkembangan teknologi terkini'
                            ],
                            [
                                'title' => 'Berfokus pada Kualitas',
                                'description' => 'Kami memberikan solusi berkualitas tinggi yang melampaui harapan klien'
                            ],
                            [
                                'title' => 'Tepat Waktu',
                                'description' => 'Kami menghormati tenggat waktu dan menyampaikan Project sesuai jadwal'
                            ]
                        ];
                    @endphp

                    @foreach($features as $feature)
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                @include('partials.icons.check')
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-1">{{ $feature['title'] }}</h4>
                                <p class="text-gray-600">{{ $feature['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="{{ route('about') }}"
                        class="inline-flex items-center px-6 py-3 bg-primary-600 text-white rounded-xl font-semibold hover:bg-primary-700 transition-all duration-300 transform hover:scale-105">
                        Pelajari Lebih Lanjut Tentang Kami
                        @include('partials.icons.arrow-right')
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
