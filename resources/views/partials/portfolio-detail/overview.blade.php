<section class="py-24 bg-white relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <div class="lg:col-span-2">
                <!-- Featured Image -->
                @if($portfolio->getFirstMediaUrl('featured_image'))
                    <div class="mb-16 group" data-aos="fade-up">
                        <div class="relative overflow-hidden rounded-3xl shadow-2xl transform group-hover:scale-105 transition-transform duration-700">
                            <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'large') }}"
                                 alt="{{ $portfolio->title }}"
                                 class="w-full h-96 md:h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                @endif

                <!-- Project Description -->
                <div class="mb-16" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Project Overview</h2>
                    </div>

                    <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100 mb-8">
                        <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">{{ $portfolio->description }}</p>

                        <div class="prose prose-lg prose-primary max-w-none">
                            {!! $portfolio->content !!}
                        </div>
                    </div>
                </div>

                <!-- Project Gallery -->
                @if($portfolio->getMedia('gallery')->count() > 0)
                    <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Project Gallery</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($portfolio->getMedia('gallery') as $image)
                                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer transform hover:-translate-y-2 gallery-item"
                                     onclick="openImageModal('{{ $image->getUrl() }}', '{{ $portfolio->title }}')">
                                    <img src="{{ $image->getUrl('thumb') }}"
                                         alt="{{ $portfolio->title }}"
                                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                        <div class="bg-white/90 backdrop-blur-sm text-gray-900 p-3 rounded-full shadow-lg transform scale-90 group-hover:scale-100 transition-transform duration-300">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Key Features -->
                <div class="mb-16" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Key Features</h2>
                    </div>

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
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-8">
                    <!-- Project Details -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-8 border border-gray-100" data-aos="fade-left">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-purple-600 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Project Details</h3>
                        </div>

                        <div class="space-y-6">
                            @if($portfolio->client_name)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Client</dt>
                                        <dd class="text-gray-900 font-semibold">{{ $portfolio->client_name }}</dd>
                                    </div>
                                </div>
                            @endif

                            @if($portfolio->completed_at)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Completion Date</dt>
                                        <dd class="text-gray-900 font-semibold">{{ $portfolio->completed_at->format('F Y') }}</dd>
                                    </div>
                                </div>
                            @endif

                            @if($portfolio->project_url)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-purple-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V8a2 2 0 00-2-2h-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500 mb-1">Live URL</dt>
                                        <dd>
                                            <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener"
                                                class="inline-flex items-center px-3 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                                                Visit Project
                                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V8a2 2 0 00-2-2h-4M14 4h6m0 0v6m0-6L10 14"></path>
                                                </svg>
                                            </a>
                                        </dd>
                                    </div>
                                </div>
                            @endif

                            @if($portfolio->technologies)
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-orange-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <dt class="text-sm font-medium text-gray-500 mb-2">Technologies Used</dt>
                                        <dd>
                                            <div class="flex flex-wrap gap-2">
                                                @foreach($portfolio->technologies as $tech)
                                                    <span class="px-3 py-1 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 text-xs rounded-full font-medium border border-primary-200">
                                                        {{ $tech }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </dd>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- CTA Card -->
                    <div class="bg-gradient-to-br from-primary-600 to-purple-700 rounded-3xl shadow-xl p-8 text-white" data-aos="fade-left" data-aos-delay="100">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold mb-3">Interested in Similar Project?</h4>
                            <p class="text-blue-100 mb-6 text-sm">Let's discuss how we can create something amazing for your business.</p>
                            <a href="{{ route('contact') }}"
                                class="group inline-flex items-center px-6 py-3 bg-white text-primary-600 rounded-xl font-bold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                Start Your Project
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Project Stats -->
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
                </div>
            </div>
        </div>
    </div>
</section>
