<section class="py-24 bg-gradient-to-br from-gray-900 via-primary-900 to-purple-900 relative overflow-hidden">
    @include('partials.shared.hero-background')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-lg rounded-full text-sm font-bold text-white mb-6 border border-white/20">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                Prestasi Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">
                Angka Itu <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Berbicara</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $statsItems = [
                    ['value' => $stats->projects, 'label' => 'Project Selesai', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10', 'delay' => 100],
                    ['value' => $stats->clients, 'label' => 'Klien yang Bahagia', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'delay' => 200],
                    ['value' => $stats->experience, 'label' => 'Pengalaman Bertahun-tahun', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'delay' => 300],
                    ['value' => $stats->satisfaction, 'label' => 'Kepuasan Klien', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'delay' => 400]
                ];
            @endphp

            @foreach($statsItems as $stat)
                <div class="text-center group" data-aos="fade-up" data-aos-delay="{{ $stat['delay'] }}">
                    <div class="relative mb-6">
                        <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300 border border-white/20">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ $stat['value'] }}</div>
                    <div class="text-blue-200 font-medium">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
