<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    @include('partials.shared.background-blobs')

    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="related-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#related-grid)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                More Projects
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Related <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Projects</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Check out some of our other successful projects in similar domains</p>
        </div>

        <!-- Related Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($relatedPortfolios as $related)
                <div class="group relative bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2 border border-white/20" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400/20 via-purple-500/20 to-pink-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative z-10">
                        <!-- Image -->
                        @if($related->getFirstMediaUrl('featured_image'))
                            <div class="relative overflow-hidden rounded-t-3xl">
                                <img src="{{ $related->getFirstMediaUrl('featured_image', 'thumb') }}"
                                     alt="{{ $related->title }}"
                                     class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">

                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500">
                                    <a href="{{ route('portfolio.detail', $related->slug) }}"
                                       class="bg-white/90 backdrop-blur-sm text-gray-900 px-4 py-2 rounded-xl font-semibold transform scale-95 group-hover:scale-100 transition-transform duration-300 shadow-lg">
                                        View Project
                                    </a>
                                </div>

                                <div class="absolute top-4 left-4">
                                    <span class="bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                        {{ ucfirst($related->category ?? 'Project') }}
                                    </span>
                                </div>
                            </div>
                        @else
                            <div class="w-full h-56 bg-gradient-to-br from-gray-100 to-gray-200 rounded-t-3xl flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif

                        <!-- Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300 leading-tight">
                                {{ $related->title }}
                            </h3>

                            @if($related->client_name)
                                <p class="text-sm text-primary-600 font-medium mb-3 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    {{ $related->client_name }}
                                </p>
                            @endif

                            <p class="text-gray-600 mb-6 leading-relaxed">{{ Str::limit($related->description, 100) }}</p>

                            <div class="flex items-center justify-between">
                                <a href="{{ route('portfolio.detail', $related->slug) }}"
                                   class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group/link">
                                    <span>View Project</span>
                                    <svg class="w-5 h-5 ml-2 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>

                                @if($related->project_url)
                                    <a href="{{ $related->project_url }}" target="_blank"
                                       class="text-gray-400 hover:text-primary-600 transition-colors duration-300" title="View Live Site">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V8a2 2 0 00-2-2h-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center mt-16" data-aos="fade-up">
            <a href="{{ route('portfolio') }}"
               class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-2xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                View All Projects
                <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
