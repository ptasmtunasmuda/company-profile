@extends('layouts.app')

@section('title', $service['title'] . ' - Detail Layanan')
@section('description', $service['description'])

@section('content')
    @include('partials.service-detail.header', ['service' => $service])
    @include('partials.service-detail.overview', ['service' => $service])
    @include('partials.service-detail.target-business', ['service' => $service])
    @include('partials.service-detail.features', ['service' => $service])
    @include('partials.service-detail.packages', ['service' => $service])
    @include('partials.service-detail.technologies', ['service' => $service])
    @include('partials.service-detail.process', ['service' => $service])
    @include('partials.service-detail.cta', ['service' => $service, 'contactSettings' => $contactSettings])
@endsection
