@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

@section('content')
    @include('partials.services.header', ['page' => $page, 'stats' => $stats])
    @include('partials.services.overview', ['page' => $page])
    @include('partials.services.featured')
    @include('partials.services.all-services')
    @include('partials.services.process')
    @include('partials.services.pricing')
    @include('partials.services.testimonials')
    @include('partials.services.cta', ['contactSettings' => $contactSettings])
@endsection
