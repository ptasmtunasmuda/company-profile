<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold mb-6 shadow-xl">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                Nilai Inti Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Apa <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Mendorong Kami</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Prinsip-prinsip dasar ini memandu semua yang kami lakukan dan membentuk cara kami bekerja dengan klien kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $values = [
                    [
                        'title' => 'Inovasi',
                        'description' => 'Kami selalu mengikuti tren teknologi untuk memberikan solusi mutakhir yang memberi Anda keunggulan kompetitif.',
                        'iconColor' => 'from-primary-500 to-primary-700',
                        'iconPath' => 'M13 10V3L4 14h7v7l9-11h-7z',
                        'borderColor' => 'from-primary-400 via-purple-500 to-pink-500',
                        'delay' => 100
                    ],
                    [
                        'title' => 'Kualitas',
                        'description' => 'Kami memberikan pekerjaan berkualitas tinggi yang melampaui harapan melalui pengujian yang ketat dan perhatian terhadap detail.',
                        'iconColor' => 'from-green-500 to-emerald-600',
                        'iconPath' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                        'borderColor' => 'from-green-400 via-emerald-500 to-teal-500',
                        'delay' => 200
                    ],
                    [
                        'title' => 'Transparansi',
                        'description' => 'Kami menjaga komunikasi terbuka di setiap proyek, membuat Anda tetap mendapat informasi di setiap langkah.',
                        'iconColor' => 'from-yellow-500 to-orange-600',
                        'iconPath' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                        'borderColor' => 'from-yellow-400 via-orange-500 to-red-500',
                        'delay' => 300
                    ],
                    [
                        'title' => 'Kemitraan',
                        'description' => 'Kami bekerja sebagai perpanjangan dari tim Anda, memahami tujuan Anda dan bekerja sama untuk mencapainya.',
                        'iconColor' => 'from-purple-500 to-pink-600',
                        'iconPath' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                        'borderColor' => 'from-purple-400 via-pink-500 to-red-500',
                        'delay' => 400
                    ]
                ];
            @endphp

            @foreach($values as $value)
                <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $value['delay'] }}">
                    <div class="absolute inset-0 bg-gradient-to-r {{ $value['borderColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 p-8 text-center">
                        <div class="w-20 h-20 bg-gradient-to-br {{ $value['iconColor'] }} rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $value['iconPath'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">{{ $value['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $value['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
