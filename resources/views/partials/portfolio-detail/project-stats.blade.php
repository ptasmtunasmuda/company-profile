<div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-8 border border-gray-100" data-aos="fade-left" data-aos-delay="200">
    <h4 class="text-lg font-bold text-gray-900 mb-6">Project Impact</h4>
    <div class="grid grid-cols-2 gap-4">
        @php
            $stats = [
                ['value' => '100%', 'label' => 'Client Satisfaction', 'color' => 'from-blue-50 to-purple-50 text-primary-600'],
                ['value' => '3x', 'label' => 'Performance Boost', 'color' => 'from-green-50 to-emerald-50 text-green-600'],
                ['value' => '24/7', 'label' => 'Uptime', 'color' => 'from-orange-50 to-red-50 text-orange-600'],
                ['value' => '99%', 'label' => 'Load Speed', 'color' => 'from-purple-50 to-pink-50 text-purple-600']
            ];
        @endphp

        @foreach($stats as $stat)
            <div class="text-center p-4 bg-gradient-to-br {{ $stat['color'] }} rounded-xl">
                <div class="text-2xl font-bold {{ $stat['color'] }} mb-1">{{ $stat['value'] }}</div>
                <div class="text-xs text-gray-600">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>
</div>
