<section class="py-24 bg-gradient-to-br from-primary-600 via-purple-700 to-primary-900 relative overflow-hidden">
    @include('partials.shared.hero-background')

    <!-- Floating particles -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-1/4 w-2 h-2 bg-white/30 rounded-full animate-ping"></div>
        <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-yellow-300/40 rounded-full animate-bounce"></div>
        <div class="absolute bottom-1/3 left-1/3 w-4 h-4 bg-blue-300/30 rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 right-1/3 w-2 h-2 bg-pink-300/40 rounded-full animate-ping animation-delay-2000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-xl rounded-full text-sm font-bold text-white mb-8 border border-white/30 shadow-2xl">
                <svg class="w-6 h-6 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Siap Mengubah Bisnis Anda?
            </div>

            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 leading-tight">
                Mari Membangun Anda
                <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-pink-500 bg-clip-text text-transparent">
                    Masa Depan Digital
                </span>
            </h2>

            <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 mb-12 max-w-5xl mx-auto leading-relaxed font-light">
                Bergabunglah dengan jajaran bisnis sukses yang telah mengubah kehadiran digital mereka dengan layanan inovatif kami
            </p>

            <div class="flex flex-col sm:flex-row gap-8 justify-center items-center mb-16">
                <a href="{{ route('contact') }}"
                    class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-2xl font-black text-xl hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl hover:shadow-3xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="relative z-10">Dapatkan Konsultasi Gratis</span>
                    @include('partials.icons.arrow-right')
                </a>

                <a href="{{ route('portfolio') }}"
                    class="group inline-flex items-center px-10 py-5 border-3 border-white/40 text-white rounded-2xl font-black text-xl hover:bg-white/10 hover:border-white backdrop-blur-sm transition-all duration-500">
                    @include('partials.icons.portfolio')
                    Lihat Pekerjaan Kami
                </a>
            </div>

            <!-- Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="flex flex-col items-center text-blue-100">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 border border-white/20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Email Kami</h4>
                    <p class="text-center">{{ $contactSettings['contact_email'] ?? 'info@company.com' }}</p>
                </div>

                <div class="flex flex-col items-center text-blue-100">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 border border-white/20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Hubungi Kami</h4>
                    <p class="text-center">{{ $contactSettings['contact_phone'] ?? '+62 123-456-7890' }}</p>
                </div>

                <div class="flex flex-col items-center text-blue-100">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 border border-white/20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Waktu Respons</h4>
                    <p class="text-center">Dalam waktu 24 jam</p>
                </div>
            </div>
        </div>
    </div>
</section>
