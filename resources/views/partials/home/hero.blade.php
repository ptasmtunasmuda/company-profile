<section class="relative bg-gradient-to-br from-primary-600 to-primary-900 text-white pt-32 pb-20 overflow-hidden">
    @include('partials.shared.hero-background')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[80vh]">
            <!-- Hero Content -->
            <div data-aos="fade-right" class="text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium text-blue-100 mb-6">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    Available for new projects
                </div>

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    <span class="text-white">{{ $heroContent->title }}</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed max-w-2xl">
                    {{ $heroContent->subtitle }}
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="{{ $heroContent->ctaLink }}"
                       class="group relative inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 rounded-2xl font-semibold text-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        {{ $heroContent->ctaText }}
                        @include('partials.icons.arrow-right')
                    </a>
                    <a href="{{ route('portfolio') }}"
                       class="group inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white rounded-2xl font-semibold text-lg hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-sm">
                        @include('partials.icons.portfolio')
                        Lihat Portofolio
                    </a>
                </div>

                <!-- Stats -->
                @include('partials.shared.hero-stats', ['stats' => $stats])
            </div>

            <!-- Hero Visual -->
            <div data-aos="fade-left" class="relative">
                <div class="relative z-10">
                    <!-- Hero Image/Illustration -->
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-blue-500 rounded-3xl transform rotate-6 opacity-20"></div>
                        <div class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                            <!-- Code Editor Mockup -->
                            <div class="bg-gray-900 rounded-2xl p-6 shadow-2xl">
                                <div class="flex items-center space-x-2 mb-4">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="space-y-2 text-sm font-mono">
                                    <div class="text-blue-400 code-line">&lt;html&gt;</div>
                                    <div class="text-green-400 ml-4 code-line">&lt;body&gt;</div>
                                    <div class="text-purple-400 ml-8 code-line">&lt;h1&gt;Hello World&lt;/h1&gt;</div>
                                    <div class="text-yellow-400 ml-8 code-line">&lt;p&gt;Building amazing websites&lt;/p&gt;</div>
                                    <div class="text-green-400 ml-4 code-line">&lt;/body&gt;</div>
                                    <div class="text-blue-400 code-line">&lt;/html&gt;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-yellow-400 rounded-2xl opacity-80 animate-float"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-purple-500 rounded-full opacity-60 animate-float animation-delay-2000"></div>
            </div>
        </div>
    </div>
</section>
