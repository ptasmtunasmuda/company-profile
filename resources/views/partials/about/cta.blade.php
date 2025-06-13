<section class="py-24 bg-gradient-to-br from-primary-600 via-purple-700 to-primary-900 relative overflow-hidden">
    @include('partials.shared.hero-background')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-xl rounded-full text-sm font-bold text-white mb-8 border border-white/30 shadow-2xl">
                <svg class="w-6 h-6 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Siap Memulai Perjalanan Anda?
            </div>

            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 leading-tight">
                Mari Membangun Anda
                <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-pink-500 bg-clip-text text-transparent">Sukses Digital</span>
            </h2>

            <div class="flex flex-col sm:flex-row gap-8 justify-center items-center mb-16">
                <a href="{{ route('contact') }}" class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-2xl font-black text-xl hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl">
                    <span class="relative z-10">Hubungi Kami</span>
                    @include('partials.icons.arrow-right')
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="flex flex-col items-center text-blue-100">
                    <h4 class="font-bold text-white mb-2">Email Kami</h4>
                    <p class="text-center">{{ $contactSettings['contact_email'] ?? 'info@company.com' }}</p>
                </div>
                <div class="flex flex-col items-center text-blue-100">
                    <h4 class="font-bold text-white mb-2">Hubungi Kami</h4>
                    <p class="text-center">{{ $contactSettings['contact_phone'] ?? '+62 123-456-7890' }}</p>
                </div>
                <div class="flex flex-col items-center text-blue-100">
                    <h4 class="font-bold text-white mb-2">Waktu Respons</h4>
                    <p class="text-center">Dalam waktu 24 jam</p>
                </div>
            </div>
        </div>
    </div>
</section>
