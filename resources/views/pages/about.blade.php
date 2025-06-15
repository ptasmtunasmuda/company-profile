@extends('layouts.app')

@section('title', $page->meta_title ?: $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)

@section('content')
@include('partials.about.header', ['page' => $page, 'stats' => $stats])
@include('partials.about.content', ['page' => $page])
@include('partials.about.team')
@include('partials.about.cta', ['contactSettings' => $contactSettings])
@endsection
