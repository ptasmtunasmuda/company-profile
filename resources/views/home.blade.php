@extends('layouts.app')

@section('title', $heroContent->title)
@section('description', $heroContent->subtitle)

@section('content')
@include('partials.home.hero', ['heroContent' => $heroContent, 'stats' => $stats])
@include('partials.home.services')
@include('partials.home.about', ['aboutContent' => $aboutContent, 'stats' => $stats])

@if($featuredPortfolios->count() > 0)
    @include('partials.home.portfolio', ['portfolios' => $featuredPortfolios])
@endif

@if($testimonials->count() > 0)
    @include('partials.home.client', ['testimonials' => $testimonials])
@endif

@include('partials.shared.cta-section')

@push('styles')
@include('partials.shared.animations-css')
@endpush
@endsection
