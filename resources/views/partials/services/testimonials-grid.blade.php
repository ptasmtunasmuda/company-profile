<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @php
        $testimonials = [
            [
                'name' => 'John Smith',
                'position' => 'CEO, TechCorp',
                'testimonial' => 'Layanan pengembangan web mereka melampaui ekspektasi kami. Tim yang profesional, pengiriman tepat waktu, dan dukungan yang sangat baik selama proyek berlangsung.',
                'initials' => 'JS',
                'delay' => 100
            ],
            [
                'name' => 'Maria Johnson',
                'position' => 'Founder, StartupXYZ',
                'testimonial' => 'Layanan desain UI/UX yang luar biasa! Mereka mengubah antarmuka lama kami menjadi pengalaman modern dan ramah pengguna yang disukai pelanggan kami.',
                'initials' => 'MJ',
                'delay' => 200
            ],
            [
                'name' => 'Alex Brown',
                'position' => 'Director, Creative Agency',
                'testimonial' => 'Layanan pemasaran digital yang luar biasa! Visibilitas online kami meningkat drastis, dan kami melihat hasil nyata dalam bulan pertama.',
                'initials' => 'AB',
                'delay' => 300
            ]
        ];
    @endphp

    @foreach($testimonials as $testimonial)
        <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $testimonial['delay'] }}">
            <div class="flex items-center mb-6">
                <div class="flex text-yellow-400">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    @endfor
                </div>
            </div>
            <blockquote class="text-gray-600 leading-relaxed mb-6 italic">
                "{{ $testimonial['testimonial'] }}"
            </blockquote>
            <div class="flex items-center">
                <div class="w-12 h-12 bg-gradient-to-br from-primary-400 to-purple-500 rounded-full flex items-center justify-center mr-4">
                    <span class="text-white font-bold">{{ $testimonial['initials'] }}</span>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">{{ $testimonial['name'] }}</div>
                    <div class="text-sm text-gray-500">{{ $testimonial['position'] }}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>
