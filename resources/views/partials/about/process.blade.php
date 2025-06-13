<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                    Mengapa Memilih Kami
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Apa yang Membuat Kita <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Berbeda</span>
                </h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">Kami tidak hanya membangun situs web dan aplikasi – kami menciptakan pengalaman digital yang menghasilkan hasil bisnis nyata.</p>

                <div class="space-y-6">
                    @php
                        $features = [
                            [
                                'title' => 'Teknologi Mutakhir',
                                'description' => 'Kami menggunakan teknologi dan kerangka kerja terbaru untuk memastikan proyek Anda tahan masa depan dan dapat diskalakan.',
                                'iconColor' => 'from-primary-500 to-primary-700',
                                'iconPath' => 'M13 10V3L4 14h7v7l9-11h-7z'
                            ],
                            [
                                'title' => 'Tepat Waktu',
                                'description' => 'Kami memahami bahwa tenggat waktu itu penting. Manajemen proyek kami yang telah terbukti memastikan pengiriman tepat waktu setiap saat.',
                                'iconColor' => 'from-green-500 to-emerald-600',
                                'iconPath' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
                            ],
                            [
                                'title' => 'Dukungan Khusus',
                                'description' => 'Hubungan kami tidak berakhir saat peluncuran. Kami menyediakan dukungan dan pemeliharaan berkelanjutan demi ketenangan pikiran Anda.',
                                'iconColor' => 'from-purple-500 to-pink-600',
                                'iconPath' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
                            ]
                        ];
                    @endphp

                    @foreach($features as $feature)
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br {{ $feature['iconColor'] }} rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['iconPath'] }}"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $feature['title'] }}</h4>
                                <p class="text-gray-600 leading-relaxed">{{ $feature['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div data-aos="fade-left" class="relative">
                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100 shadow-2xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Proses Kami</h3>
                    <div class="space-y-6">
                        @php
                            $processSteps = [
                                ['number' => '1', 'title' => 'Penemuan & Perencanaan', 'description' => 'Kami memahami tujuan Anda dan membuat peta jalan yang terperinci', 'color' => 'from-primary-600 to-purple-600'],
                                ['number' => '2', 'title' => 'Desain & Prototype', 'description' => 'Membuat wireframe dan Prototype interaktif', 'color' => 'from-green-500 to-emerald-600'],
                                ['number' => '3', 'title' => 'Perkembangan', 'description' => 'Membangun dengan kode bersih dan praktik terbaik', 'color' => 'from-yellow-500 to-orange-600'],
                                ['number' => '4', 'title' => 'Pengujian & Peluncuran', 'description' => 'Pengujian menyeluruh sebelum penerapan yang berhasil', 'color' => 'from-red-500 to-pink-600']
                            ];
                        @endphp

                        @foreach($processSteps as $step)
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br {{ $step['color'] }} rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 shadow-lg">{{ $step['number'] }}</div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">{{ $step['title'] }}</h4>
                                    <p class="text-gray-600 text-sm">{{ $step['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl opacity-80 animate-float"></div>
            </div>
        </div>
    </div>
</section>
