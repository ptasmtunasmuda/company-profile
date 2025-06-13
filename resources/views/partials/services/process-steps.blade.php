<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    @php
        $processSteps = [
            [
                'number' => '1',
                'title' => 'Penemuan & Strategi',
                'description' => 'Selami lebih dalam persyaratan, tujuan, dan sasaran Anda untuk membuat peta jalan layanan yang komprehensif',
                'color' => 'from-primary-500 to-blue-600',
                'delay' => 100
            ],
            [
                'number' => '2',
                'title' => 'Perencanaan & Desain',
                'description' => 'Buat rencana terperinci, kerangka kerja, dan desain yang selaras dengan visi dan tujuan Anda',
                'color' => 'from-green-500 to-emerald-600',
                'delay' => 200
            ],
            [
                'number' => '3',
                'title' => 'Pelaksanaan',
                'description' => 'Melaksanakan rencana menggunakan praktik terbaik, teknologi terkini, dan jaminan kualitas yang ketat',
                'color' => 'from-purple-500 to-pink-600',
                'delay' => 300
            ],
            [
                'number' => '4',
                'title' => 'Pengiriman & Dukungan',
                'description' => 'Pengiriman yang lancar dan dukungan berkelanjutan untuk memastikan keberhasilan layanan Anda yang berkelanjutan',
                'color' => 'from-orange-500 to-red-600',
                'delay' => 400
            ]
        ];
    @endphp

    @foreach($processSteps as $step)
        <div class="group text-center" data-aos="fade-up" data-aos-delay="{{ $step['delay'] }}">
            <div class="relative mb-8">
                <div class="w-32 h-32 bg-gradient-to-br {{ $step['color'] }} rounded-full mx-auto flex items-center justify-center shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-110 border-4 border-white/20">
                    @if($step['number'] == '4')
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    @else
                        <span class="text-white font-black text-3xl">{{ $step['number'] }}</span>
                    @endif
                </div>

                @if(!$loop->last)
                    <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-white/30"></div>
                @endif

                <div class="absolute {{ $step['number'] == '1' ? '-top-2 -right-2' : ($step['number'] == '2' ? '-top-2 -left-2' : '-bottom-2 -right-2') }} w-{{ $step['number'] == '1' ? '4' : ($step['number'] == '2' ? '3' : '2') }} h-{{ $step['number'] == '1' ? '4' : ($step['number'] == '2' ? '3' : '2') }} bg-{{ $step['number'] == '1' ? 'yellow' : ($step['number'] == '2' ? 'green' : 'purple') }}-400 rounded-full animate-{{ $step['number'] == '1' ? 'ping' : ($step['number'] == '2' ? 'bounce' : 'pulse') }}"></div>
            </div>
            <h3 class="text-xl font-bold mb-4 text-white group-hover:text-yellow-400 transition-colors duration-300">{{ $step['title'] }}</h3>
            <p class="text-blue-200 leading-relaxed">{{ $step['description'] }}</p>
        </div>
    @endforeach
</div>
