<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                Proses Kerja Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Dari
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Konsep ke Realitas
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Metodologi yang telah terbukti untuk menghasilkan solusi digital berkualitas tinggi dengan hasil yang terukur
            </p>
        </div>

        <!-- Process Steps -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $processSteps = [
                    [
                        'number' => '01',
                        'title' => 'Discovery & Planning',
                        'description' => 'Kami memahami kebutuhan, tujuan, dan target audiens Anda melalui riset mendalam dan analisis komprehensif.',
                        'color' => 'from-blue-500 to-blue-700',
                        'borderColor' => 'from-blue-400 via-blue-500 to-blue-600',
                        'delay' => 100
                    ],
                    [
                        'number' => '02',
                        'title' => 'Design & Prototype',
                        'description' => 'Membuat wireframe dan prototype interaktif untuk memvisualisasikan solusi sebelum development.',
                        'color' => 'from-green-500 to-green-700',
                        'borderColor' => 'from-green-400 via-emerald-500 to-teal-500',
                        'delay' => 200
                    ],
                    [
                        'number' => '03',
                        'title' => 'Development',
                        'description' => 'Implementasi menggunakan teknologi terkini dengan kode yang bersih, scalable, dan maintainable.',
                        'color' => 'from-purple-500 to-purple-700',
                        'borderColor' => 'from-purple-400 via-pink-500 to-red-500',
                        'delay' => 300
                    ],
                    [
                        'number' => '04',
                        'title' => 'Testing & Launch',
                        'description' => 'Pengujian menyeluruh sebelum peluncuran dan dukungan pasca-launch untuk memastikan kesuksesan proyek.',
                        'color' => 'from-orange-500 to-red-600',
                        'borderColor' => 'from-yellow-400 via-orange-500 to-red-500',
                        'delay' => 400
                    ]
                ];
            @endphp

            @foreach($processSteps as $step)
                <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $step['delay'] }}">
                    <!-- Background border effect -->
                    <div class="absolute inset-0 bg-gradient-to-r {{ $step['borderColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <!-- Main card -->
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden text-center">
                        <!-- Top gradient accent -->
                        <div class="h-2 bg-gradient-to-r {{ $step['color'] }}"></div>

                        <div class="p-8">
                            <!-- Step Circle -->
                            <div class="w-20 h-20 bg-gradient-to-br {{ $step['color'] }} rounded-full mx-auto flex items-center justify-center shadow-xl group-hover:shadow-2xl transition-all duration-500 group-hover:scale-110 border-4 border-white/20 mb-6">
                                <span class="text-white font-black text-lg">{{ $step['number'] }}</span>
                            </div>

                            <!-- Step Content -->
                            <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">
                                {{ $step['title'] }}
                            </h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                {{ $step['description'] }}
                            </p>

                            <!-- Bottom accent line -->
                            <div class="mt-6 w-16 h-1 bg-gradient-to-r {{ $step['color'] }} mx-auto rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-20" data-aos="fade-up" data-aos-delay="500">
            <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100 max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Siap Memulai Proyek Anda?
                </h3>
                <p class="text-gray-600 mb-6">
                    Mari diskusikan kebutuhan proyek Anda dan temukan solusi terbaik yang sesuai dengan budget dan timeline Anda.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-bold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Mulai Konsultasi
                    <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
