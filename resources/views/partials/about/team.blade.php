<!-- Team Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Temui Tim Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Talenta di Balik
                <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                    Kesuksesan Anda
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mx-auto rounded-full mb-8"></div>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Tim pengembang, desainer, dan ahli strategi berbakat yang berpengalaman bekerja sama untuk mewujudkan visi digital Anda.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-24">
            @php
                $teamMembers = [
                    [
                        'name' => 'Ahmad Fauzi',
                        'position' => 'Lead Developer',
                        'description' => 'Arsitek teknologi berpengalaman 8+ tahun yang mengkhususkan diri dalam pengembangan aplikasi full-stack. Memimpin tim dengan keahlian mendalam di Laravel, React, dan Vue.js untuk menciptakan solusi enterprise yang scalable dan robust.',
                        'skills' => ['Laravel', 'React', 'Vue.js', 'Node.js'],
                        'image' => 'team-1.jpg',
                        'skillsColor' => 'from-primary-100 to-purple-100 text-primary-700 border-primary-200',
                        'avatarColor' => 'from-primary-400 to-primary-600',
                        'ringColor' => 'ring-primary-100 group-hover:ring-primary-200',
                        'borderColor' => 'from-primary-400 via-purple-500 to-pink-500',
                        'delay' => 100
                    ],
                    [
                        'name' => 'Prasetyo Ari Wibowo',
                        'position' => 'Full Stack Developer',
                        'description' => 'Developer serbaguna yang menguasai teknologi frontend dan backend. Berpengalaman dalam membangun aplikasi web modern dengan performa tinggi dan antarmuka yang responsif untuk berbagai platform.',
                        'skills' => ['Laravel', 'NextJS', 'Flutter', 'Java', 'Firebase', 'MysQL', 'PostgreSQL'],
                        'image' => 'team-2.jpg',
                        'skillsColor' => 'from-pink-100 to-purple-100 text-pink-700 border-pink-200',
                        'avatarColor' => 'from-pink-400 to-purple-600',
                        'ringColor' => 'ring-pink-100 group-hover:ring-pink-200',
                        'borderColor' => 'from-green-400 via-emerald-500 to-teal-500',
                        'delay' => 200
                    ],
                    [
                        'name' => 'Budi Santoso',
                        'position' => 'Frontend Developer',
                        'description' => 'Spesialis frontend yang passionate dalam menciptakan pengalaman pengguna yang luar biasa. Fokus pada pengembangan antarmuka yang intuitif, responsif, dan memiliki performa optimal di berbagai perangkat dan browser.',
                        'skills' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap'],
                        'image' => 'team-3.jpg',
                        'skillsColor' => 'from-green-100 to-emerald-100 text-green-700 border-green-200',
                        'avatarColor' => 'from-green-400 to-emerald-600',
                        'ringColor' => 'ring-green-100 group-hover:ring-green-200',
                        'borderColor' => 'from-yellow-400 via-orange-500 to-red-500',
                        'delay' => 300
                    ]
                ];
            @endphp

            @foreach($teamMembers as $member)
                <div class="about-team-card group relative" data-aos="fade-up" data-aos-delay="{{ $member['delay'] }}">
                    <!-- Background border effect -->
                    <div class="absolute inset-0 bg-gradient-to-r {{ $member['borderColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>

                    <!-- Main card -->
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                        <!-- Top gradient accent -->
                        <div class="h-2 bg-gradient-to-r {{ $member['avatarColor'] }}"></div>

                        <div class="relative p-8 text-center">
                            <!-- Avatar -->
                            <div class="relative inline-block mb-6">
                                <div class="w-32 h-32 bg-gradient-to-br {{ $member['avatarColor'] }} rounded-full mx-auto overflow-hidden ring-4 {{ $member['ringColor'] }} transition-all duration-300 shadow-xl">
                                    <img src="{{ asset('images/' . $member['image']) }}"
                                         alt="{{ $member['name'] }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <div class="hidden w-full h-full bg-gradient-to-br {{ $member['avatarColor'] }} items-center justify-center text-white text-3xl font-bold">
                                        {{ substr($member['name'], 0, 1) }}
                                    </div>
                                </div>
                                <!-- Online status -->
                                <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-400 rounded-full border-4 border-white shadow-lg">
                                    <div class="w-full h-full bg-green-400 rounded-full animate-pulse"></div>
                                </div>
                            </div>

                            <!-- Name & Position -->
                            <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">
                                {{ $member['name'] }}
                            </h3>
                            <p class="text-primary-600 font-semibold mb-4 text-sm uppercase tracking-wide">
                                {{ $member['position'] }}
                            </p>

                            <!-- Description -->
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                {{ $member['description'] }}
                            </p>

                            <!-- Skills -->
                            <div class="flex flex-wrap gap-2 justify-center mb-6">
                                @foreach($member['skills'] as $skill)
                                    <span class="px-3 py-1 bg-gradient-to-r {{ $member['skillsColor'] }} text-xs rounded-full font-medium border transition-transform duration-200 hover:scale-105">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- Social Links -->
                            <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="#" class="w-10 h-10 bg-gradient-to-r {{ $member['avatarColor'] }} rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gradient-to-r from-gray-600 to-gray-800 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                    Mengapa Memilih Kami
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Apa yang Membuat
                    <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                        Kami Berbeda
                    </span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-primary-600 to-purple-600 mb-8 rounded-full"></div>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Kami tidak hanya membangun website dan aplikasi – kami menciptakan pengalaman digital yang menghasilkan dampak bisnis nyata dan terukur.
                </p>

                <!-- Features List -->
                <div class="space-y-6">
                    @php
                        $features = [
                            [
                                'title' => 'Teknologi Mutakhir',
                                'description' => 'Menggunakan teknologi dan framework terbaru untuk memastikan proyek Anda future-proof, scalable, dan performant di semua platform.',
                                'iconColor' => 'from-primary-500 to-primary-700',
                                'iconPath' => 'M13 10V3L4 14h7v7l9-11h-7z'
                            ],
                            [
                                'title' => 'Delivery Tepat Waktu',
                                'description' => 'Sistem manajemen proyek yang terbukti dan metodologi agile memastikan setiap milestone tercapai sesuai timeline yang disepakati.',
                                'iconColor' => 'from-green-500 to-emerald-600',
                                'iconPath' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
                            ],
                            [
                                'title' => 'Support Berkelanjutan',
                                'description' => 'Layanan maintenance, update, dan technical support 24/7 untuk memastikan website dan aplikasi Anda selalu dalam kondisi optimal.',
                                'iconColor' => 'from-purple-500 to-pink-600',
                                'iconPath' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z'
                            ]
                        ];
                    @endphp

                    @foreach($features as $feature)
                        <div class="flex items-start space-x-4 group">
                            <div class="w-16 h-16 bg-gradient-to-br {{ $feature['iconColor'] }} rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['iconPath'] }}"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300">
                                    {{ $feature['title'] }}
                                </h4>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $feature['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Content - Process -->
            <div data-aos="fade-left" class="relative">
                <!-- Main Process Card -->
                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100 shadow-2xl relative overflow-hidden">
                    <!-- Background decoration -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary-100 to-purple-100 rounded-full -translate-y-16 translate-x-16 opacity-50"></div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center relative z-10">
                        Metodologi Kerja Kami
                    </h3>

                    <div class="space-y-6 relative z-10">
                        @php
                            $processSteps = [
                                [
                                    'number' => '1',
                                    'title' => 'Discovery & Planning',
                                    'description' => 'Analisis mendalam requirement dan strategi digital yang tepat',
                                    'color' => 'from-primary-600 to-purple-600',
                                    'duration' => '1-2 Minggu'
                                ],
                                [
                                    'number' => '2',
                                    'title' => 'Design & Prototype',
                                    'description' => 'Wireframe, UI/UX design, dan prototype interaktif',
                                    'color' => 'from-green-500 to-emerald-600',
                                    'duration' => '2-3 Minggu'
                                ],
                                [
                                    'number' => '3',
                                    'title' => 'Development',
                                    'description' => 'Coding dengan best practices dan clean architecture',
                                    'color' => 'from-yellow-500 to-orange-600',
                                    'duration' => '4-8 Minggu'
                                ],
                                [
                                    'number' => '4',
                                    'title' => 'Testing & Launch',
                                    'description' => 'Quality assurance dan deployment yang smooth',
                                    'color' => 'from-red-500 to-pink-600',
                                    'duration' => '1-2 Minggu'
                                ]
                            ];
                        @endphp

                        @foreach($processSteps as $index => $step)
                            <div class="flex items-center space-x-4 group">
                                <div class="w-14 h-14 bg-gradient-to-br {{ $step['color'] }} rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    {{ $step['number'] }}
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                        <h4 class="font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">
                                            {{ $step['title'] }}
                                        </h4>
                                        <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full">
                                            {{ $step['duration'] }}
                                        </span>
                                    </div>
                                    <p class="text-gray-600 text-sm">{{ $step['description'] }}</p>
                                </div>
                            </div>

                            @if($index < count($processSteps) - 1)
                                <div class="flex justify-center">
                                    <div class="w-px h-6 bg-gradient-to-b {{ $step['color'] }} opacity-30"></div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Floating decoration -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl opacity-80 animate-float shadow-xl"></div>
                <div class="absolute -bottom-6 -left-6 w-20 h-20 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl opacity-60 animate-float animation-delay-1000 shadow-xl"></div>
            </div>
        </div>
    </div>
</section>
