<nav class="text-blue-200 mb-8" data-aos="fade-up">
    <a href="{{ route('home') }}" class="hover:text-white transition-colors duration-300 hover:underline">Home</a>
    <span class="mx-3 text-blue-300">/</span>
    <a href="{{ route('portfolio') }}" class="hover:text-white transition-colors duration-300 hover:underline">Portfolio</a>
    <span class="mx-3 text-blue-300">/</span>
    <span class="text-white font-medium">{{ $portfolio->title }}</span>
</nav>
