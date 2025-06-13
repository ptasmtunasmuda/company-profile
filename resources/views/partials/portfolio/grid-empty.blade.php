<div class="text-center py-24">
    <div class="relative mb-12">
        <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full mx-auto flex items-center justify-center shadow-xl">
            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
        </div>
        <!-- Floating elements around empty state -->
        <div class="absolute top-0 left-1/4 w-4 h-4 bg-primary-200 rounded-full animate-bounce animation-delay-1000"></div>
        <div class="absolute top-1/4 right-1/4 w-3 h-3 bg-purple-200 rounded-full animate-pulse"></div>
        <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-pink-200 rounded-full animate-ping"></div>
    </div>

    <h3 class="text-3xl font-bold text-gray-900 mb-6">Proyek Menakjubkan Akan Segera Hadir</h3>
    <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto leading-relaxed">
        Saat ini kami tengah menciptakan pengalaman digital yang luar biasa bagi klien kami.
        Kunjungi kembali segera untuk melihat inovasi terbaru kami!
    </p>

    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ route('contact') }}"
            class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-bold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
            Mulai Project Anda
            @include('partials.icons.arrow-right')
        </a>

        <a href="{{ route('services') }}"
            class="group inline-flex items-center px-8 py-4 border-2 border-primary-600 text-primary-600 rounded-2xl font-bold hover:bg-primary-600 hover:text-white transition-all duration-300">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
            </svg>
            Layanan kami
        </a>
    </div>
</div>
