@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

@section('content')
@include('partials.about.header', ['page' => $page, 'stats' => $stats])
@include('partials.about.content', ['page' => $page])
@include('partials.about.values')
@include('partials.about.team')
@include('partials.about.stats', ['stats' => $stats])
@include('partials.about.process')
@include('partials.about.cta', ['contactSettings' => $contactSettings])

@push('styles')
@include('partials.about.styles')
@endpush
@endsection
