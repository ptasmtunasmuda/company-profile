<div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
    <a href="{{ route('contact') }}"
       class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-primary-600 rounded-2xl font-black text-xl hover:from-yellow-400 hover:to-orange-500 hover:text-white transition-all duration-500 transform hover:scale-110 shadow-2xl hover:shadow-3xl">
        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <span class="relative z-10">Start Your Project</span>
        @include('partials.icons.arrow-right')
    </a>

    <a href="{{ route('portfolio') }}"
       class="group inline-flex items-center px-10 py-5 border-3 border-white/40 text-white rounded-2xl font-black text-xl hover:bg-white/10 hover:border-white backdrop-blur-sm transition-all duration-500">
        @include('partials.icons.portfolio')
        View More Projects
    </a>
</div>
