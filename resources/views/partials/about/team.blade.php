<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Temui Tim Kami
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 leading-tight">
                Orang-Orang di Balik Anda <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Kesuksesan</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Tim pengembang, desainer, dan ahli strategi kami yang berbakat bekerja sama untuk mewujudkan visi Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $teamMembers = [
                    [
                        'name' => 'John Doe',
                        'position' => 'Lead Developer',
                        'description' => 'Spesialis dalam pengembangan tumpukan penuh dengan pengalaman 8+ tahun di Laravel dan React.',
                        'skills' => ['Laravel', 'React', 'Vue.js'],
                        'image' => 'team-1.jpg',
                        'skillsColor' => 'from-primary-100 to-purple-100 text-primary-700 border-primary-200',
                        'avatarColor' => 'from-primary-400 to-primary-600',
                        'ringColor' => 'ring-primary-100 group-hover:ring-primary-200',
                        'borderColor' => 'from-primary-400 via-purple-500 to-pink-500',
                        'delay' => 100
                    ],
                    [
                        'name' => 'Jane Smith',
                        'position' => 'UI/UX Designer',
                        'description' => 'Menciptakan pengalaman pengguna yang indah dan intuitif dengan fokus pada pengoptimalan konversi.',
                        'skills' => ['Figma', 'Adobe XD', 'Sketch'],
                        'image' => 'team-2.jpg',
                        'skillsColor' => 'from-pink-100 to-purple-100 text-pink-700 border-pink-200',
                        'avatarColor' => 'from-pink-400 to-purple-600',
                        'ringColor' => 'ring-pink-100 group-hover:ring-pink-200',
                        'borderColor' => 'from-green-400 via-emerald-500 to-teal-500',
                        'delay' => 200
                    ],
                    [
                        'name' => 'Mike Johnson',
                        'position' => 'Mobile Developer',
                        'description' => 'Ahli dalam pengembangan React Native dan Flutter untuk aplikasi seluler lintas platform.',
                        'skills' => ['React Native', 'Flutter', 'Swift'],
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
                <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $member['delay'] }}">
                    <div class="absolute inset-0 bg-gradient-to-r {{ $member['borderColor'] }} rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-500 opacity-20 group-hover:opacity-30"></div>
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:-translate-y-3 border border-white/20 overflow-hidden">
                        <div class="relative p-8 text-center">
                            <div class="relative inline-block mb-6">
                                <div class="w-32 h-32 bg-gradient-to-br {{ $member['avatarColor'] }} rounded-full mx-auto overflow-hidden ring-4 {{ $member['ringColor'] }} transition-all duration-300">
                                    <img src="{{ asset('images/' . $member['image']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-400 rounded-full border-4 border-white"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition-colors duration-300">{{ $member['name'] }}</h3>
                            <p class="text-primary-600 font-semibold mb-3">{{ $member['position'] }}</p>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ $member['description'] }}</p>

                            <div class="flex flex-wrap gap-2 justify-center mb-6">
                                @foreach($member['skills'] as $skill)
                                    <span class="px-3 py-1 bg-gradient-to-r {{ $member['skillsColor'] }} text-xs rounded-full font-medium border">{{ $skill }}</span>
                                @endforeach
                            </div>

                            <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="#" class="w-10 h-10 bg-gradient-to-r from-primary-500 to-purple-600 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286z"/>
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
