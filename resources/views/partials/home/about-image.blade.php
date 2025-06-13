<div data-aos="fade-right" class="relative">
    <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-blue-500 rounded-3xl transform -rotate-6 opacity-20"></div>
        <img src="{{ \App\Models\Setting::get('about_image', asset('images/about-image.jpg')) }}" alt="About Us"
            class="relative rounded-3xl shadow-2xl w-full h-auto transform rotate-2 hover:rotate-0 transition-transform duration-500">
    </div>

    <!-- Floating Badge -->
    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-xl">
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                @include('partials.icons.check')
            </div>
            <div>
                <div class="text-2xl font-bold text-gray-900">{{ $stats->satisfaction }}</div>
                <div class="text-sm text-gray-600">Kepuasan Klien</div>
            </div>
        </div>
    </div>
</div>
