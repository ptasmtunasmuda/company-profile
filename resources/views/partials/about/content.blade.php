<!-- Main Content Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="about-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#about-grid)" />
        </svg>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Featured Image Section -->
        @if($page->getFirstMediaUrl('featured_image'))
            <div class="mb-20 relative" data-aos="fade-up">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-400 via-purple-500 to-pink-500 rounded-3xl transform rotate-1 opacity-20"></div>
                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl border border-white/20 p-6">
                    <img src="{{ $page->getFirstMediaUrl('featured_image') }}"
                         alt="{{ $page->title }}"
                         class="w-full h-64 md:h-96 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        @endif

        <!-- Story Section -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                Kisah Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Perjalanan Menuju
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Kesuksesan Digital Anda
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
        </div>

        <!-- Content Card -->
        <div class="prose prose-lg prose-primary max-w-none" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white/95 backdrop-blur-xl rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl relative">
                <!-- Decorative corner elements -->
                <div class="absolute top-4 left-4 w-8 h-8 border-l-4 border-t-4 border-primary-200 rounded-tl-lg"></div>
                <div class="absolute top-4 right-4 w-8 h-8 border-r-4 border-t-4 border-primary-200 rounded-tr-lg"></div>
                <div class="absolute bottom-4 left-4 w-8 h-8 border-l-4 border-b-4 border-primary-200 rounded-bl-lg"></div>
                <div class="absolute bottom-4 right-4 w-8 h-8 border-r-4 border-b-4 border-primary-200 rounded-br-lg"></div>

                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold mb-8 shadow-xl">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                Nilai Inti Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Apa yang
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Mendorong Kami
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Prinsip-prinsip dasar ini memandu semua yang kami lakukan dan membentuk cara kami bekerja dengan klien kami.
            </p>
        </div>

        <!-- Values Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $values = [
                    [
                        'title' => 'Inovasi',
                        'description' => 'Kami selalu mengikuti tren teknologi terdepan untuk memberikan solusi mutakhir yang memberi Anda keunggulan kompetitif di pasar digital.',
                        'iconColor' => 'from-primary-500 to-primary-700',
                        'iconPath' => 'M13 10V3L4 14h7v7l9-11h-7z',
                        'borderColor' => 'from-primary-400 via-purple-500 to-pink-500',
                        'delay' => 100
                    ],
                    [
                        'title' => 'Kualitas',
                        'description' => 'Kami berkomitmen memberikan pekerjaan berkualitas tinggi yang melampaui ekspektasi melalui pengujian ketat dan perhatian detail.',
                        'iconColor' => 'from-green-500 to-emerald-600',
                        'iconPath' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                        'borderColor' => 'from-green-400 via-emerald-500 to-teal-500',
                        'delay' => 200
                    ],
                    [
                        'title' => 'Transparansi',
                        'description' => 'Kami memelihara komunikasi terbuka di setiap tahap proyek, memastikan Anda selalu mendapat informasi terkini tentang perkembangan.',
                        'iconColor' => 'from-yellow-500 to-orange-600',
                        'iconPath' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                        'borderColor' => 'from-yellow-400 via-orange-500 to-red-500',
                        'delay' => 300
                    ],
                    [
                        'title' => 'Kemitraan',
                        'description' => 'Kami bekerja sebagai perpanjangan tim Anda, memahami visi dan tujuan bisnis untuk mencapai kesuksesan bersama.',
                        'iconColor' => 'from-purple-500 to-pink-600',
                        'iconPath' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                        'borderColor' => 'from-purple-400 via-pink-500 to-red-500',
                        'delay' => 400
                    ]
                ];
            @endphp

            @foreach($values as $value)
                <div class="about-value-card group relative" data-aos="fade-up" data-aos-delay="{{ $value['delay'] }}">
                    <!-- Background border effect -->
                    <div class="absolute inset-0 bg-gradient-to-r {{ $value['borderColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <!-- Main card -->
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                        <!-- Top gradient accent -->
                        <div class="h-2 bg-gradient-to-r {{ $value['iconColor'] }}"></div>

                        <div class="p-8 text-center">
                            <!-- Icon -->
                            <div class="w-20 h-20 bg-gradient-to-br {{ $value['iconColor'] }} rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-xl">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $value['iconPath'] }}"></path>
                                </svg>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">
                                {{ $value['title'] }}
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 leading-relaxed text-sm">
                                {{ $value['description'] }}
                            </p>

                            <!-- Bottom accent line -->
                            <div class="mt-6 w-16 h-1 bg-gradient-to-r {{ $value['iconColor'] }} mx-auto rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-20" data-aos="fade-up" data-aos-delay="500">
            <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Siap Mengalami Perbedaannya?
                </h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Mari kita bekerja sama untuk mewujudkan visi digital Anda dengan nilai-nilai yang kami pegang teguh.
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
