<nav class="fixed w-full z-50 transition-all duration-300" x-data="{
    open: false,
    scrolled: false,
    init() {
        window.addEventListener('scroll', () => {
            this.scrolled = window.scrollY > 20;
        });
    }
}"
x-init="init()"
:class="scrolled ? 'py-2' : 'py-4'">
    <!-- Floating Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <!-- Main Navbar -->
            <div class="bg-white/90 backdrop-blur-md border border-white/20 rounded-2xl shadow-lg transition-all duration-300"
                 :class="scrolled ? 'shadow-xl' : 'shadow-lg'">
                <div class="flex justify-between items-center px-6 py-4">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center group">
                            @if(\App\Models\Setting::get('site_logo'))
                                <img class="h-8 w-auto transition-transform duration-300 group-hover:scale-105"
                                     src="{{ \App\Models\Setting::get('site_logo') }}"
                                     alt="{{ config('app.name') }}">
                            @else
                                <div class="w-8 h-8 bg-gradient-to-br from-primary-500 to-primary-700 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">{{ substr(config('app.name'), 0, 1) }}</span>
                                </div>
                            @endif
                            <span class="ml-3 text-xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-primary-600">
                                {{ \App\Models\Setting::get('site_name', config('app.name')) }}
                            </span>
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center space-x-1">
                        <a href="{{ route('home') }}"
                           class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-all duration-300 rounded-lg hover:bg-primary-50 group {{ request()->routeIs('home') ? 'text-primary-600 bg-primary-50' : '' }}">
                            Home
                            @if(request()->routeIs('home'))
                                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-primary-600 rounded-full"></div>
                            @endif
                        </a>
                        <a href="{{ route('about') }}"
                           class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-all duration-300 rounded-lg hover:bg-primary-50 group {{ request()->routeIs('about') ? 'text-primary-600 bg-primary-50' : '' }}">
                            About
                            @if(request()->routeIs('about'))
                                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-primary-600 rounded-full"></div>
                            @endif
                        </a>
                        <a href="{{ route('services') }}"
                           class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-all duration-300 rounded-lg hover:bg-primary-50 group {{ request()->routeIs('services') ? 'text-primary-600 bg-primary-50' : '' }}">
                            Services
                            @if(request()->routeIs('services'))
                                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-primary-600 rounded-full"></div>
                            @endif
                        </a>
                        <a href="{{ route('portfolio') }}"
                           class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-all duration-300 rounded-lg hover:bg-primary-50 group {{ request()->routeIs('portfolio*') ? 'text-primary-600 bg-primary-50' : '' }}">
                            Portfolio
                            @if(request()->routeIs('portfolio*'))
                                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-primary-600 rounded-full"></div>
                            @endif
                        </a>
                        <a href="{{ route('contact') }}"
                           class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-all duration-300 rounded-lg hover:bg-primary-50 group {{ request()->routeIs('contact') ? 'text-primary-600 bg-primary-50' : '' }}">
                            Contact
                            @if(request()->routeIs('contact'))
                                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-primary-600 rounded-full"></div>
                            @endif
                        </a>

                        <!-- WhatsApp Button -->
                        <div class="ml-4 pl-4 border-l border-gray-200">
                            <a href="https://wa.me/6281268018693"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="relative inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-green-500 to-green-600 text-white text-sm font-semibold rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg group overflow-hidden">
                                <svg class="relative z-10 w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.595z"/>
                                </svg>
                                <span class="relative z-10">WhatsApp</span>
                                <!-- Hover effect -->
                                <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-green-700 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                            </a>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="lg:hidden flex items-center">
                        <button @click="open = !open"
                                class="relative p-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <div class="w-6 h-6 relative">
                                <!-- Hamburger Icon -->
                                <span class="absolute inset-0 transition-all duration-300 transform"
                                      :class="open ? 'rotate-45 translate-y-0' : 'rotate-0 -translate-y-2'">
                                    <span class="block w-6 h-0.5 bg-current rounded-full"></span>
                                </span>
                                <span class="absolute inset-0 transition-all duration-300"
                                      :class="open ? 'opacity-0' : 'opacity-100'">
                                    <span class="block w-6 h-0.5 bg-current rounded-full"></span>
                                </span>
                                <span class="absolute inset-0 transition-all duration-300 transform"
                                      :class="open ? '-rotate-45 translate-y-0' : 'rotate-0 translate-y-2'">
                                    <span class="block w-6 h-0.5 bg-current rounded-full"></span>
                                </span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="open"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 transform scale-100"
                 x-transition:leave-end="opacity-0 transform scale-95"
                 class="lg:hidden absolute top-full left-0 right-0 mt-2">
                <div class="bg-white/95 backdrop-blur-md border border-white/20 rounded-2xl shadow-xl mx-4">
                    <div class="px-6 py-4 space-y-2">
                        <a href="{{ route('home') }}"
                           class="flex items-center px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-xl transition-all duration-300 {{ request()->routeIs('home') ? 'text-primary-600 bg-primary-50' : '' }}"
                           @click="open = false">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Home
                        </a>
                        <a href="{{ route('about') }}"
                           class="flex items-center px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-xl transition-all duration-300 {{ request()->routeIs('about') ? 'text-primary-600 bg-primary-50' : '' }}"
                           @click="open = false">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            About
                        </a>
                        <a href="{{ route('services') }}"
                           class="flex items-center px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-xl transition-all duration-300 {{ request()->routeIs('services') ? 'text-primary-600 bg-primary-50' : '' }}"
                           @click="open = false">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                            </svg>
                            Services
                        </a>
                        <a href="{{ route('portfolio') }}"
                           class="flex items-center px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-xl transition-all duration-300 {{ request()->routeIs('portfolio*') ? 'text-primary-600 bg-primary-50' : '' }}"
                           @click="open = false">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            Portfolio
                        </a>
                        <a href="{{ route('contact') }}"
                           class="flex items-center px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-xl transition-all duration-300 {{ request()->routeIs('contact') ? 'text-primary-600 bg-primary-50' : '' }}"
                           @click="open = false">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contact
                        </a>

                        <!-- Mobile WhatsApp -->
                        <div class="pt-4 border-t border-gray-200">
                            <a href="https://wa.me/6281268018693"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="flex items-center justify-center w-full px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white text-base font-semibold rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105"
                               @click="open = false">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.595z"/>
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Backdrop for mobile menu -->
<div x-show="open"
     x-transition:enter="transition-opacity ease-linear duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition-opacity ease-linear duration-300"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     @click="open = false"
     class="lg:hidden fixed inset-0 z-40 bg-black bg-opacity-25 backdrop-blur-sm"
     aria-hidden="true">
</div>
