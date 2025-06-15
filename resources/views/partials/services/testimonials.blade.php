<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Background Blobs -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-4 -left-4 w-72 h-72 bg-gradient-to-br from-primary-200/30 to-purple-300/30 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-yellow-200/30 to-pink-300/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"></path>
                </svg>
                Testimoni Klien
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Apa Kata <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Klien Kami</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Kepuasan klien adalah prioritas utama kami
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $testimonials = [
                    [
                        'name' => 'Budi Santoso',
                        'position' => 'CEO, TechStart Indonesia',
                        'testimonial' => 'Tim mereka sangat profesional dan hasil kerjanya melampaui ekspektasi kami. Website e-commerce yang dibuat meningkatkan penjualan online kami hingga 300%.',
                        'rating' => 5,
                        'avatar' => 'BS',
                        'color' => 'from-blue-500 to-blue-700',
                        'delay' => 100
                    ],
                    [
                        'name' => 'Sari Wijaya',
                        'position' => 'Founder, Beauty Care',
                        'testimonial' => 'Aplikasi mobile yang dikembangkan sangat user-friendly dan membantu customer kami untuk lebih mudah berinteraksi dengan brand kami.',
                        'rating' => 5,
                        'avatar' => 'SW',
                        'color' => 'from-pink-500 to-pink-700',
                        'delay' => 200
                    ],
                    [
                        'name' => 'Ahmad Rahman',
                        'position' => 'Marketing Director, FoodCorp',
                        'testimonial' => 'Strategi digital marketing mereka berhasil meningkatkan brand awareness kami di media sosial dengan engagement rate yang tinggi.',
                        'rating' => 5,
                        'avatar' => 'AR',
                        'color' => 'from-green-500 to-green-700',
                        'delay' => 300
                    ]
                ];
            @endphp

            @foreach($testimonials as $testimonial)
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $testimonial['delay'] }}">
                    <!-- Stars Rating -->
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400 mr-4">
                            @for($i = 0; $i < $testimonial['rating']; $i++)
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            @endfor
                        </div>
                        <span class="text-sm text-gray-500">{{ $testimonial['rating'] }}.0</span>
                    </div>

                    <!-- Testimonial Text -->
                    <blockquote class="text-gray-600 leading-relaxed mb-6 italic">
                        "{{ $testimonial['testimonial'] }}"
                    </blockquote>

                    <!-- Author Info -->
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br {{ $testimonial['color'] }} rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white font-bold text-sm">{{ $testimonial['avatar'] }}</span>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">{{ $testimonial['name'] }}</div>
                            <div class="text-sm text-gray-500">{{ $testimonial['position'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-16" data-aos="fade-up">
            <p class="text-gray-600 mb-6">
                Bergabunglah dengan 50+ klien yang telah merasakan layanan terbaik kami
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Mulai Proyek Anda
                <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
