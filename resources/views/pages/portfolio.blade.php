@extends('layouts.app')

@section('title', 'Our Portfolio - Web & Mobile App Development Projects')
@section('description', 'Browse our portfolio of successful web and mobile app development projects. See how we\'ve helped businesses achieve their digital goals.')

@section('content')
@include('partials.portfolio.header', ['stats' => $stats])
@include('partials.portfolio.navigation')

@if($featuredPortfolios->count() > 0)
    @include('partials.portfolio.featured', ['featuredPortfolios' => $featuredPortfolios])
@endif

@include('partials.portfolio.grid', ['portfolios' => $portfolios])

@push('styles')
@include('partials.portfolio.styles')
@endpush

@push('scripts')
@include('partials.portfolio.scripts')
@endpush
@endsection
