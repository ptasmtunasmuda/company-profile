@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

@section('content')
@include('partials.services.header', ['page' => $page, 'stats' => $stats])
@include('partials.services.navigation')
@include('partials.services.featured')
@include('partials.services.overview', ['page' => $page])
@include('partials.services.grid')
@include('partials.services.process')
@include('partials.services.pricing')
@include('partials.services.testimonials')
@include('partials.services.cta', ['contactSettings' => $contactSettings])

@push('styles')
@include('partials.services.styles')
@endpush

@push('scripts')
@include('partials.services.scripts')
@endpush
@endsection
