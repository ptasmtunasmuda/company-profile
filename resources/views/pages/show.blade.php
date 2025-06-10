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
                <img src="{{ $page->getFirstMediaUrl('featured_image') }}"
                     alt="{{ $page->title }}"
                     class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg">
            </div>
        @endif

        <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="200">
            {!! $page->content !!}
        </div>
    </div>
</section>
@endsection
