<section class="py-24 bg-gradient-to-br from-primary-600 via-purple-700 to-primary-900 relative overflow-hidden">
    @include('partials.shared.hero-background')

    <!-- Enhanced decorative elements -->
    <div class="absolute top-20 left-20 w-6 h-6 bg-yellow-300 rounded-full animate-pulse opacity-70"></div>
    <div class="absolute top-40 right-32 w-4 h-4 bg-pink-300 rounded-full animate-ping opacity-60"></div>
    <div class="absolute bottom-32 left-1/4 w-8 h-8 bg-blue-300 rounded-full animate-bounce opacity-50"></div>
    <div class="absolute bottom-20 right-1/4 w-5 h-5 bg-green-300 rounded-full animate-pulse opacity-60"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <!-- Badge -->
            <div data-aos="fade-up">
                <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-xl rounded-full text-sm font-bold text-white mb-8 border border-white/30 shadow-2xl">
                    <svg class="w-6 h-6 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Siap Memulai Proyek Anda?
                </div>
            </div>

            <!-- Main Heading -->
            <div data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 leading-tight">
                    Mari Ciptakan Sesuatu yang
                    <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-pink-500 bg-clip-text text-transparent">
                        Luar Biasa Bersama
                    </span>
                </h2>
                <div class="w-32 h-1 bg-gradient-to-r from-yellow-400 to-pink-500 mx-auto rounded-full mb-8"></div>
            </div>

            <!-- Subtitle -->
            <div data-aos="fade-up" data-aos-delay="200">
                <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed mb-12">
                    Siap mengubah visi Anda menjadi kenyataan? Mari diskusikan proyek Anda dan ciptakan sesuatu yang
                    <span class="font-bold text-yellow-300">menakjubkan</span> bersama-sama.
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('contact') }}" class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-2xl font-black text-xl hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl">
                    <span class="relative z-10">Mulai Proyek Anda</span>
                    <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>

                <a href="{{ route('portfolio') }}" class="group inline-flex items-center px-10 py-5 bg-transparent border-2 border-white/30 text-white rounded-2xl font-bold text-xl hover:bg-white/10 hover:border-white/50 transition-all duration-500 transform hover:scale-105">
                    <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Lihat Proyek Lainnya
                </a>
            </div>

            <!-- Contact Information Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                <!-- Email Card -->
                <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Email Kami</h4>
                    <p class="text-blue-100 group-hover:text-white transition-colors duration-300">
                        info@asmtunasmuda.com
                    </p>
                </div>

                <!-- Phone Card -->
                <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Hubungi Kami</h4>
                    <p class="text-blue-100 group-hover:text-white transition-colors duration-300">
                        +62 812-6801-8693
                    </p>
                </div>

                <!-- Response Time Card -->
                <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Waktu Respons</h4>
                    <p class="text-blue-100 group-hover:text-white transition-colors duration-300">
                        Dalam 24 jam
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
