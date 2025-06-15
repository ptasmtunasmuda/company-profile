@extends('layouts.app')

@section('title', 'Contact Us')
@section('description', 'Get in touch with us for your web and mobile app development needs. We provide free consultation and custom quotes.')

@section('content')
@include('partials.contact.header')
@include('partials.contact.content')
@include('partials.contact.faq')
@include('partials.contact.map')
@include('partials.contact.modal')
@endsection
