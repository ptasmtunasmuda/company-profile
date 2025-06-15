<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="faq-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#faq-grid)" />
        </svg>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                FAQ
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Pertanyaan yang Sering <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Diajukan</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Berikut ini beberapa pertanyaan umum yang kami terima dari klien kami. Tidak dapat menemukan apa yang Anda cari? Jangan ragu untuk menghubungi kami!</p>
        </div>

        <div class="space-y-6" x-data="{ activeAccordion: null }">
            @php
                $faqs = [
                    [
                        'question' => 'Berapa lama waktu yang dibutuhkan untuk mengembangkan situs web?',
                        'answer' => 'Jadwal pengembangan bergantung pada kompleksitas dan fitur situs web Anda. Situs web bisnis sederhana biasanya memerlukan waktu 2-4 minggu, sedangkan aplikasi web yang kompleks dapat memerlukan waktu 2-6 bulan. Kami akan memberikan jadwal terperinci selama konsultasi awal, termasuk tonggak pencapaian dan hasil akhir.',
                        'color' => 'from-primary-50 to-blue-50 border-primary-500'
                    ],
                    [
                        'question' => 'Apa yang termasuk dalam layanan pengembangan Anda?',
                        'answer' => 'Layanan kami yang komprehensif meliputi konsultasi awal, desain UI/UX, pengembangan frontend dan backend, desain database, pengujian, penerapan, dan dukungan pasca peluncuran. Kami juga menyediakan pelatihan untuk manajemen konten, optimasi SEO, dan panduan pemeliharaan dasar untuk memastikan keberhasilan Anda.',
                        'color' => 'from-green-50 to-emerald-50 border-green-500'
                    ],
                    [
                        'question' => 'Apakah Anda menyediakan pemeliharaan dan dukungan berkelanjutan?',
                        'answer' => 'Ya, kami menawarkan berbagai paket pemeliharaan termasuk pembaruan keamanan, pembaruan konten, pemantauan kinerja, manajemen cadangan, dan dukungan teknis 24/7. Kami juga menyediakan dukungan gratis selama 30 hari setelah proyek selesai untuk memastikan semuanya berjalan lancar.',
                        'color' => 'from-purple-50 to-pink-50 border-purple-500'
                    ],
                    [
                        'question' => 'Apa syarat pembayaran Anda?',
                        'answer' => 'Kami biasanya meminta pembayaran di muka sebesar 50% untuk memulai proyek, dengan sisa 50% dibayarkan setelah proyek selesai. Untuk proyek yang lebih besar, kami dapat mengatur pembayaran berdasarkan tonggak pencapaian. Kami menerima transfer bank, kartu kredit, dan berbagai metode pembayaran online demi kenyamanan Anda.',
                        'color' => 'from-orange-50 to-red-50 border-orange-500'
                    ],
                    [
                        'question' => 'Bisakah Anda membantu pengembangan aplikasi mobile?',
                        'answer' => 'Tentu saja! Kami mengkhususkan diri dalam pengembangan aplikasi seluler asli dan lintas platform menggunakan React Native dan Flutter. Kami dapat mengembangkan aplikasi untuk platform iOS dan Android serta membantu pengajuan ke app store, pengoptimalan, dan pembaruan berkelanjutan.',
                        'color' => 'from-blue-50 to-indigo-50 border-blue-500'
                    ]
                ];
            @endphp

            @foreach($faqs as $index => $faq)
                <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <button @click="activeAccordion = activeAccordion === {{ $index + 1 }} ? null : {{ $index + 1 }}"
                            class="w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none hover:bg-gray-50 transition-colors duration-300">
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">{{ $faq['question'] }}</h3>
                        <div class="flex-shrink-0 ml-6">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-200 transition-colors duration-300">
                                <svg class="w-4 h-4 text-primary-600 transform transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === {{ $index + 1 }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </button>
                    <div x-show="activeAccordion === {{ $index + 1 }}" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-8 pb-6">
                        <div class="bg-gradient-to-r {{ $faq['color'] }} rounded-2xl p-6 border-l-4">
                            <p class="text-gray-700 leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Additional Help CTA -->
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="600">
            <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Masih ada pertanyaan?</h3>
                <p class="text-gray-600 mb-6">Tidak dapat menemukan jawaban yang Anda cari? Tim kami siap membantu Anda dengan pertanyaan spesifik apa pun tentang project Anda.</p>
                <a href="#contact-form" onclick="document.getElementById('message').focus()"
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Ajukan Pertanyaan Anda
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
