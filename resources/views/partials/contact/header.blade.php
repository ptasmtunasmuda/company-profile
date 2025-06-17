<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white pt-32 pb-24 overflow-hidden">
    @include('partials.shared.hero-background')

    <!-- Decorative Elements - More Symmetrical -->
    <div class="absolute top-20 right-20 w-4 h-4 bg-blue-300 rounded-full animate-pulse"></div>
    <div class="absolute top-20 left-20 w-4 h-4 bg-purple-300 rounded-full animate-pulse"></div>
    <div class="absolute top-60 left-32 w-3 h-3 bg-purple-300 rounded-full animate-ping"></div>
    <div class="absolute top-60 right-32 w-3 h-3 bg-blue-300 rounded-full animate-ping"></div>
    <div class="absolute bottom-20 left-1/4 w-2 h-2 bg-yellow-300 rounded-full animate-pulse"></div>
    <div class="absolute bottom-20 right-1/4 w-2 h-2 bg-pink-300 rounded-full animate-pulse"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <!-- Badge Section -->
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-lg rounded-full text-sm font-semibold text-blue-100 mb-8 border border-white/20 shadow-xl" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-5 h-5 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Mari Berkomunikasi
            </div>

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight" data-aos="fade-up" data-aos-delay="200">
                <span class="bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent">
                    {{ $page->title ?? 'Hubungi Kami' }}
                </span>
            </h1>

            <!-- Subtitle -->
            <div class="max-w-5xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="300">
                <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 leading-relaxed font-light">
                    Siap untuk
                    <span class="font-semibold text-yellow-300 relative">
                        memulai proyek impian
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-yellow-300/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0,8 Q50,0 100,8" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </span> Anda?
                    <span class="font-semibold text-orange-300 relative">
                        Mari diskusikan
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-orange-300/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0,8 Q50,0 100,8" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </span> bagaimana kami dapat
                    <span class="font-semibold text-pink-300 relative">
                        mewujudkan visi digital
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-pink-300/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0,8 Q50,0 100,8" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </span> Anda menjadi kenyataan
                </p>
            </div>

            <!-- Quick Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="400">
                <!-- Email -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 group">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Email Kami</h4>
                    <p class="text-blue-100 group-hover:text-white transition-colors duration-300 text-sm">
                        {{ $contactSettings['contact_email'] ?? 'info@asmtunasmuda.com' }}
                    </p>
                </div>

                <!-- Phone -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 group">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Telepon</h4>
                    <p class="text-blue-100 group-hover:text-white transition-colors duration-300 text-sm">
                        {{ $contactSettings['contact_phone'] ?? '+62 812-6801-8693' }}
                    </p>
                </div>

                <!-- Response Time -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 group">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Respons Time</h4>
                    <p class="text-blue-100 group-hover:text-white transition-colors duration-300 text-sm">
                        Dalam 24 jam
                    </p>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="mt-16" data-aos="fade-up" data-aos-delay="500">
                <div class="flex flex-col items-center">
                    <span class="text-blue-200 text-sm font-medium mb-3">Scroll untuk melihat lebih banyak</span>
                    <div class="w-6 h-10 border-2 border-blue-200 rounded-full flex justify-center">
                        <div class="w-1 h-3 bg-blue-200 rounded-full mt-2 animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
