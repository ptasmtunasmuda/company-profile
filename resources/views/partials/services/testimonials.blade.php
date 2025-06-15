<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"></path>
                </svg>
                Testimoni Klien
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Apa Kata
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Klien Kami
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Kepuasan klien adalah prioritas utama kami. Dengar langsung pengalaman mereka bekerja sama dengan tim kami.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $testimonials = [
                    [
                        'name' => 'Budi Santoso',
                        'position' => 'CEO, TechStart Indonesia',
                        'testimonial' => 'Tim mereka sangat profesional dan hasil kerjanya melampaui ekspektasi kami. Website e-commerce yang dibuat meningkatkan penjualan online kami hingga 300% dalam 6 bulan pertama.',
                        'rating' => 5,
                        'avatar' => 'BS',
                        'color' => 'from-blue-500 to-blue-700',
                        'borderColor' => 'from-blue-400 via-blue-500 to-blue-600',
                        'delay' => 100
                    ],
                    [
                        'name' => 'Sari Wijaya',
                        'position' => 'Founder, Beauty Care',
                        'testimonial' => 'Aplikasi mobile yang dikembangkan sangat user-friendly dan membantu customer kami untuk lebih mudah berinteraksi dengan brand kami. ROI sangat memuaskan!',
                        'rating' => 5,
                        'avatar' => 'SW',
                        'color' => 'from-pink-500 to-pink-700',
                        'borderColor' => 'from-pink-400 via-rose-500 to-red-500',
                        'delay' => 200
                    ],
                    [
                        'name' => 'Ahmad Rahman',
                        'position' => 'Marketing Director, FoodCorp',
                        'testimonial' => 'Strategi digital marketing mereka berhasil meningkatkan brand awareness kami di media sosial dengan engagement rate yang tinggi dan cost per acquisition yang optimal.',
                        'rating' => 5,
                        'avatar' => 'AR',
                        'color' => 'from-green-500 to-green-700',
                        'borderColor' => 'from-green-400 via-emerald-500 to-teal-500',
                        'delay' => 300
                    ]
                ];
            @endphp

            @foreach($testimonials as $testimonial)
                <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $testimonial['delay'] }}">
                    <!-- Background border effect -->
                    <div class="absolute inset-0 bg-gradient-to-r {{ $testimonial['borderColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <!-- Main card -->
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                        <!-- Top gradient accent -->
                        <div class="h-2 bg-gradient-to-r {{ $testimonial['color'] }}"></div>

                        <div class="p-8">
                            <!-- Stars Rating -->
                            <div class="flex items-center mb-6">
                                <div class="flex text-yellow-400 mr-4">
                                    @for($i = 0; $i < $testimonial['rating']; $i++)
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                    @endfor
                                </div>
                                <span class="text-sm text-gray-500 font-medium">{{ $testimonial['rating'] }}.0</span>
                            </div>

                            <!-- Testimonial Text -->
                            <blockquote class="text-gray-600 leading-relaxed mb-6 italic text-sm">
                                "{{ $testimonial['testimonial'] }}"
                            </blockquote>

                            <!-- Author Info -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gradient-to-br {{ $testimonial['color'] }} rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <span class="text-white font-bold text-sm">{{ $testimonial['avatar'] }}</span>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">{{ $testimonial['name'] }}</div>
                                    <div class="text-sm text-gray-500">{{ $testimonial['position'] }}</div>
                                </div>
                            </div>

                            <!-- Bottom accent line -->
                            <div class="mt-6 w-16 h-1 bg-gradient-to-r {{ $testimonial['color'] }} rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-20" data-aos="fade-up">
            <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100 max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Siap Menjadi Klien Berikutnya?
                </h3>
                <p class="text-gray-600 mb-6">
                    Bergabunglah dengan 50+ klien yang telah merasakan layanan terbaik kami dan rasakan perbedaannya
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-bold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Mulai Proyek Anda
                    <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
