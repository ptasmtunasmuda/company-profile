<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-emerald-100 to-teal-100 text-emerald-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                Proses Kerja
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Bagaimana Kami
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Bekerja?
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Metodologi yang telah terbukti untuk menghasilkan hasil terbaik dengan kualitas tinggi
            </p>
        </div>

        <!-- Process Steps -->
        <div class="relative">
            <!-- Connection Line -->
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r {{ $service['color'] }} opacity-20 transform -translate-y-1/2"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-{{ count($service['process']) }} gap-8">
                @foreach($service['process'] as $step => $description)
                    <div class="group relative text-center" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <!-- Step Circle -->
                        <div class="relative z-10 w-20 h-20 bg-gradient-to-br {{ $service['color'] }} rounded-full mx-auto flex items-center justify-center shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-110 border-4 border-white mb-6">
                            <span class="text-white font-black text-lg">{{ sprintf('%02d', $loop->iteration) }}</span>
                        </div>

                        <!-- Step Content -->
                        <div class="bg-white/95 backdrop-blur-xl rounded-2xl p-6 shadow-xl group-hover:shadow-2xl transition-all duration-500 transform group-hover:-translate-y-2 border border-white/20">
                            <h3 class="text-lg font-bold mb-3 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">
                                {{ $step }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                {{ $description }}
                            </p>

                            <!-- Bottom accent line -->
                            <div class="mt-4 w-12 h-1 bg-gradient-to-r {{ $service['color'] }} mx-auto rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-20" data-aos="fade-up">
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
