<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @php
        $features = [
            [
                'title' => 'High Performance',
                'description' => 'Optimized for speed and efficiency with modern development practices.',
                'iconColor' => 'from-blue-500 to-purple-600',
                'iconPath' => 'M13 10V3L4 14h7v7l9-11h-7z'
            ],
            [
                'title' => 'Responsive Design',
                'description' => 'Perfect experience across all devices and screen sizes.',
                'iconColor' => 'from-green-500 to-emerald-600',
                'iconPath' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z'
            ],
            [
                'title' => 'Security Focused',
                'description' => 'Built with security best practices and modern encryption.',
                'iconColor' => 'from-orange-500 to-red-600',
                'iconPath' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
            ],
            [
                'title' => 'User-Friendly',
                'description' => 'Intuitive interface designed for optimal user experience.',
                'iconColor' => 'from-pink-500 to-purple-600',
                'iconPath' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
            ]
        ];
    @endphp

    @foreach($features as $feature)
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center mb-4">
                <div class="w-8 h-8 bg-gradient-to-br {{ $feature['iconColor'] }} rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['iconPath'] }}"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900">{{ $feature['title'] }}</h3>
            </div>
            <p class="text-gray-600 text-sm">{{ $feature['description'] }}</p>
        </div>
    @endforeach
</div>
