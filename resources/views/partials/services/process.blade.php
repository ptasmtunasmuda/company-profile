<section class="py-24 bg-gradient-to-br from-gray-900 via-primary-900 to-purple-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900/90 via-primary-900/80 to-purple-900/90"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-lg rounded-full text-sm font-bold text-white mb-6 border border-white/20">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                Proses Kerja Kami
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">
                Dari <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Konsep</span> ke Realitas
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Metodologi yang telah terbukti untuk menghasilkan solusi digital berkualitas tinggi
            </p>
        </div>

        <!-- Process Steps -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $processSteps = [
                    [
                        'number' => '01',
                        'title' => 'Discovery & Planning',
                        'description' => 'Kami memahami kebutuhan, tujuan, dan target audiens Anda melalui riset mendalam.',
                        'color' => 'from-blue-500 to-blue-700',
                        'delay' => 100
                    ],
                    [
                        'number' => '02',
                        'title' => 'Design & Prototype',
                        'description' => 'Membuat wireframe dan prototype interaktif untuk memvisualisasikan solusi.',
                        'color' => 'from-green-500 to-green-700',
                        'delay' => 200
                    ],
                    [
                        'number' => '03',
                        'title' => 'Development',
                        'description' => 'Implementasi menggunakan teknologi terkini dengan kode yang bersih dan scalable.',
                        'color' => 'from-purple-500 to-purple-700',
                        'delay' => 300
                    ],
                    [
                        'number' => '04',
                        'title' => 'Testing & Launch',
                        'description' => 'Pengujian menyeluruh sebelum peluncuran dan dukungan pasca-launch.',
                        'color' => 'from-orange-500 to-red-600',
                        'delay' => 400
                    ]
                ];
            @endphp

            @foreach($processSteps as $step)
                <div class="group text-center" data-aos="fade-up" data-aos-delay="{{ $step['delay'] }}">
                    <div class="relative mb-8">
                        <!-- Step Circle -->
                        <div class="w-24 h-24 bg-gradient-to-br {{ $step['color'] }} rounded-full mx-auto flex items-center justify-center shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-110 border-4 border-white/20 mb-4">
                            <span class="text-white font-black text-lg">{{ $step['number'] }}</span>
                        </div>

                        <!-- Connection Line -->
                        @if(!$loop->last)
                            <div class="hidden lg:block absolute top-12 left-1/2 w-full h-0.5 bg-white/20 transform translate-x-12"></div>
                        @endif
                    </div>

                    <!-- Step Content -->
                    <h3 class="text-xl font-bold mb-4 text-white group-hover:text-yellow-400 transition-colors duration-300">
                        {{ $step['title'] }}
                    </h3>
                    <p class="text-blue-200 leading-relaxed text-sm">
                        {{ $step['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
