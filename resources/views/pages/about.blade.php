@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

@section('content')
<!-- Page Header -->
<section class="bg-gray-900 text-white pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">{{ $page->title }}</h1>
            <nav class="text-gray-300" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                <span class="mx-2">/</span>
                <span class="text-white">{{ $page->title }}</span>
            </nav>
        </div>
    </div>
</section>

<!-- Page Content -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($page->getFirstMediaUrl('featured_image'))
            <div class="mb-12" data-aos="fade-up">
                <img src="{{ $page->getFirstMediaUrl('featured_image') }}" alt="{{ $page->title }}" class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg">
            </div>
        @endif

        <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="200">
            {!! $page->content !!}
        </div>
    </div>
</section>

<!-- Team Section (Optional) -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Team</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Meet the talented individuals who make our success possible.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="{{ asset('images/team-1.jpg') }}" alt="Team Member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                <p class="text-gray-600 mb-2">Lead Developer</p>
                <p class="text-sm text-gray-500">Specializes in full-stack development with 8+ years of experience in Laravel and React.</p>
            </div>

            <!-- Team Member 2 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="{{ asset('images/team-2.jpg') }}" alt="Team Member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                <p class="text-gray-600 mb-2">UI/UX Designer</p>
                <p class="text-sm text-gray-500">Creates beautiful and intuitive user experiences with a focus on conversion optimization.</p>
            </div>

            <!-- Team Member 3 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="{{ asset('images/team-3.jpg') }}" alt="Team Member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">Mike Johnson</h3>
                <p class="text-gray-600 mb-2">Mobile Developer</p>
                <p class="text-sm text-gray-500">Expert in React Native and Flutter development for cross-platform mobile applications.</p>
            </div>
        </div>
    </div>
</section>
@endsection
