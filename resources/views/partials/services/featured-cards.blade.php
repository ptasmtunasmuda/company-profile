<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-10">
    @php
        $featuredServices = [
            [
                'title' => 'Web Development',
                'description' => 'Situs web modern dan responsif yang menggunakan teknologi mutakhir. Cepat, aman, dan dioptimalkan untuk mesin pencari.',
                'technologies' => ['Laravel', 'React', 'Vue.js'],
                'iconColor' => 'from-primary-500 to-primary-700',
                'bgColor' => 'from-primary-400 via-purple-500 to-pink-500',
                'iconPath' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                'category' => 'Development',
                'buttonColor' => 'from-primary-600 to-purple-600 hover:from-primary-700 hover:to-purple-700',
                'delay' => 150
            ],
            [
                'title' => 'Mobile Apps',
                'description' => 'Aplikasi mobile lintas platform untuk iOS dan Android dengan kinerja asli dan UI modern.',
                'technologies' => ['React Native', 'Flutter', 'Swift'],
                'iconColor' => 'from-green-500 to-emerald-600',
                'bgColor' => 'from-green-400 via-emerald-500 to-teal-500',
                'iconPath' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                'category' => 'Mobile',
                'buttonColor' => 'from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700',
                'delay' => 300
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Antarmuka pengguna yang intuitif berfokus pada pengalaman pengguna dan pengoptimalan konversi yang disukai pengguna.',
                'technologies' => ['Figma', 'Prototyping', 'Research'],
                'iconColor' => 'from-yellow-500 to-orange-600',
                'bgColor' => 'from-yellow-400 via-orange-500 to-red-500',
                'iconPath' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z',
                'category' => 'Design',
                'buttonColor' => 'from-yellow-600 to-orange-600 hover:from-yellow-700 hover:to-orange-700',
                'delay' => 450
            ]
        ];
    @endphp

    @foreach($featuredServices as $service)
        <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">
            <div class="absolute inset-0 bg-gradient-to-r {{ $service['bgColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

            <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20">
                <div class="absolute -top-4 -right-4 z-20">
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12 group-hover:rotate-6 transition-transform duration-300">
                        ⭐ Unggulan
                    </div>
                </div>

                <div class="relative overflow-hidden p-8">
                    <div class="w-20 h-20 bg-gradient-to-br {{ $service['iconColor'] }} rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['iconPath'] }}"></path>
                        </svg>
                    </div>

                    <div class="absolute top-4 left-4">
                        <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                            {{ $service['category'] }}
                        </span>
                    </div>
                </div>

                <div class="p-8 pt-0">
                    <div class="flex items-start justify-between mb-4">
                        <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                            {{ $service['title'] }}
                        </h3>
                        <div class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            @include('partials.icons.arrow-right')
                        </div>
                    </div>

                    <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">{{ $service['description'] }}</p>

                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($service['technologies'] as $tech)
                            <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">{{ $tech }}</span>
                        @endforeach
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full font-medium border border-gray-200">+3 lagi</span>
                    </div>

                    <a href="{{ route('contact') }}" class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r {{ $service['buttonColor'] }} text-white rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Dapatkan Penawaran
                        @include('partials.icons.arrow-right')
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
