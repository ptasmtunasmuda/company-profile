<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                Dipercaya Oleh
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Klien Terpercaya Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Bergabung dengan puluhan perusahaan yang telah mempercayai layanan kami untuk mengembangkan bisnis mereka.</p>
        </div>

        <!-- Logo Carousel Container -->
        <div class="relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
            <!-- Gradient Overlays -->
            <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-gray-50 via-gray-50/80 to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-blue-50 via-blue-50/80 to-transparent z-10 pointer-events-none"></div>

            <!-- Scrolling Container -->
            <div class="flex animate-scroll">
                @php
                    $brands = [
                        ['name' => 'Wandera', 'logo' => 'wanderera.png'],
                        ['name' => 'XYUandBEYOND', 'logo' => 'xyuandbeyond.png'],
                        ['name' => 'The World In My Pocket', 'logo' => 'theworldinmypocket.png'],
                        ['name' => 'Adventures & Sunsets', 'logo' => 'adventuresnsunsets.png'],
                        ['name' => 'Trilhas e Aventuras', 'logo' => 'trilhaseaventuras.png'],
                        ['name' => 'Dolcevia', 'logo' => 'dolcevia.png'],
                        ['name' => 'A Rai of Light', 'logo' => 'araioflight.png'],
                        ['name' => 'Citrica Foods', 'logo' => 'citria.png'],
                        ['name' => 'Arkana Group', 'logo' => 'arkana.png'],
                        ['name' => 'Verilink Media', 'logo' => 'verilink.png']
                    ];
                @endphp

                <!-- First Set of Logos -->
                @foreach($brands as $brand)
                    <div class="flex-none w-72 mx-6 group">
                        <div class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl border border-gray-200/50 hover:border-primary-300/50 transition-all duration-700 hover:shadow-xl hover:shadow-primary-500/10 hover:-translate-y-1">
                            <!-- Logo Container -->
                            <div class="h-20 flex items-center justify-center mb-6">
                                @if(file_exists(public_path('images/' . $brand['logo'])))
                                    <img src="{{ asset('images/' . $brand['logo']) }}"
                                         alt="{{ $brand['name'] }}"
                                         class="max-h-16 max-w-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                                @else
                                    <div class="h-16 w-20 bg-gradient-to-r from-slate-100 to-slate-200 rounded-2xl flex items-center justify-center border border-slate-300/50">
                                        <span class="text-slate-600 font-bold text-lg tracking-wide">{{ strtoupper(substr($brand['name'], 0, 3)) }}</span>
                                    </div>
                                @endif
                            </div>

                            <!-- Company Name -->
                            <div class="text-center">
                                <h3 class="font-semibold text-slate-800 text-lg tracking-tight">
                                    {{ $brand['name'] }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Duplicate Set for Infinite Loop -->
                @foreach($brands as $brand)
                    <div class="flex-none w-72 mx-6 group">
                        <div class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl border border-gray-200/50 hover:border-primary-300/50 transition-all duration-700 hover:shadow-xl hover:shadow-primary-500/10 hover:-translate-y-1">
                            <!-- Logo Container -->
                            <div class="h-20 flex items-center justify-center mb-6">
                                @if(file_exists(public_path('images/' . $brand['logo'])))
                                    <img src="{{ asset('images/' . $brand['logo']) }}"
                                         alt="{{ $brand['name'] }}"
                                         class="max-h-16 max-w-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                                @else
                                    <div class="h-16 w-20 bg-gradient-to-r from-slate-100 to-slate-200 rounded-2xl flex items-center justify-center border border-slate-300/50">
                                        <span class="text-slate-600 font-bold text-lg tracking-wide">{{ strtoupper(substr($brand['name'], 0, 3)) }}</span>
                                    </div>
                                @endif
                            </div>

                            <!-- Company Name -->
                            <div class="text-center">
                                <h3 class="font-semibold text-slate-800 text-lg tracking-tight">
                                    {{ $brand['name'] }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Custom CSS for Animation -->
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .animate-scroll {
            animation: scroll 50s linear infinite;
        }

        .animate-scroll:hover {
            animation-play-state: paused;
        }

        .backdrop-blur-sm {
            backdrop-filter: blur(4px);
        }
    </style>
</section>
