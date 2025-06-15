<section class="py-24 bg-white relative overflow-hidden" id="map-section">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Lokasi Kami
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Kunjungi Kantor <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Kami</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Kunjungi kantor kami untuk konsultasi tatap muka atau jadwalkan pertemuan virtual sesuai keinginan Anda.</p>
        </div>

        <!-- Map Container -->
        <div class="relative" data-aos="fade-up" data-aos-delay="200">
            <!-- Main Map Container -->
            <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl overflow-hidden shadow-2xl relative group">
                <!-- Google Maps Iframe -->
                <div class="h-96 md:h-[500px] relative">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.5586055449908!2d103.95828687494276!3d1.0556109624510284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98dc7fc0fa00d%3A0x41a924a035a6ef72!2sPT%20ASM%20TUNAS%20MUDA!5e1!3m2!1sen!2sid!4v1749814014579!5m2!1sen!2sid"
                        width="100%"
                        height="100%"
                        style="border:0; border-radius: 1.5rem;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-full">
                    </iframe>

                    <!-- Floating Info Card -->
                    <div class="absolute top-6 left-6 bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl border border-gray-100 max-w-sm transform hover:scale-105 transition-all duration-300 hover:shadow-xl z-10">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-purple-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">PT ASM TUNAS MUDA</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">{{ \App\Models\Setting::get('contact_address', 'Jl. Merdeka No. 123, Kediri, East Java, Indonesia') }}</p>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col gap-3">
                                <a href="https://maps.google.com/maps?q=PT+ASM+TUNAS+MUDA" target="_blank"
                                    class="inline-flex items-center justify-center px-4 py-3 bg-gradient-to-r from-primary-600 to-primary-700 text-white rounded-xl text-sm font-semibold hover:from-primary-700 hover:to-primary-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                    Lihat di Google Maps
                                </a>
                                <a href="tel:{{ \App\Models\Setting::get('contact_phone', '+62123456789') }}"
                                    class="inline-flex items-center justify-center px-4 py-3 border-2 border-primary-600 text-primary-600 rounded-xl text-sm font-semibold hover:bg-primary-600 hover:text-white transition-all duration-300 transform hover:scale-105">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Map Control Button - Full Screen -->
                    <button onclick="openMapModal()" class="absolute top-6 right-6 bg-white/95 backdrop-blur-sm p-3 rounded-xl shadow-lg border border-gray-100 hover:bg-white hover:shadow-xl transition-all duration-300 transform hover:scale-110 z-10">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                        </svg>
                    </button>
                </div>

                <!-- Corner Decorations -->
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-primary-400 to-purple-500 rounded-full opacity-20 group-hover:scale-110 transition-transform duration-500"></div>
                <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-400 rounded-full opacity-20 group-hover:scale-110 transition-transform duration-500"></div>
            </div>
        </div>

        <!-- Additional Location Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
            <div class="contact-card text-center p-8 bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Jam Operasional</h3>
                <p class="text-gray-600 font-medium mb-2">{{ \App\Models\Setting::get('office_hours', 'Senin - Jumat: 09:00 - 17:00') }}</p>
                <p class="text-sm text-gray-500">Konsultasi weekend tersedia dengan perjanjian</p>
            </div>

            <div class="contact-card text-center p-8 bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Konsultasi Gratis</h3>
                <p class="text-gray-600 font-medium mb-2">Dapatkan konsultasi gratis untuk project Anda</p>
                <p class="text-sm text-gray-500">Tanpa biaya tersembunyi, harga transparan</p>
            </div>

            <div class="contact-card text-center p-8 bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Mudah Dijangkau</h3>
                <p class="text-gray-600 font-medium mb-2">Lokasi strategis dengan akses transportasi mudah</p>
                <p class="text-sm text-gray-500">Parkir tersedia, dekat dengan angkutan umum</p>
            </div>
        </div>
    </div>
</section>
