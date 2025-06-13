<!-- Features -->
<div class="space-y-4">
    @php
        $features = [
            [
                'title' => 'Tim Ahli',
                'description' => 'Pengembang dan desainer berpengalaman yang selalu mengikuti perkembangan teknologi terkini'
            ],
            [
                'title' => 'Berfokus pada Kualitas',
                'description' => 'Kami memberikan solusi berkualitas tinggi yang melampaui harapan klien'
            ],
            [
                'title' => 'Tepat Waktu',
                'description' => 'Kami menghormati tenggat waktu dan menyampaikan Project sesuai jadwal'
            ]
        ];
    @endphp

    @foreach($features as $feature)
        <div class="flex items-start space-x-4">
            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                @include('partials.icons.check')
            </div>
            <div>
                <h4 class="text-lg font-semibold text-gray-900 mb-1">{{ $feature['title'] }}</h4>
                <p class="text-gray-600">{{ $feature['description'] }}</p>
            </div>
        </div>
    @endforeach
</div>
