@extends('layouts.app')

@section('title', $portfolio->title . ' - Portfolio')
@section('description', $portfolio->description)

@section('content')
@include('partials.portfolio-detail.header', ['portfolio' => $portfolio])
@include('partials.portfolio-detail.overview', ['portfolio' => $portfolio])

@if($relatedPortfolios->count() > 0)
    @include('partials.portfolio-detail.related', ['relatedPortfolios' => $relatedPortfolios])
@endif

@include('partials.portfolio-detail.cta')
@include('partials.portfolio-detail.modal')
@endsection
