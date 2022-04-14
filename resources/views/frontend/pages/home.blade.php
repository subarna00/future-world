@extends('frontend.layout.master')
@section('content')
    @include('frontend.templateParts.banner')
    @include('frontend.templateParts.featured')
    @include('frontend.templateParts.about')
    @include('frontend.templateParts.service')
    @include('frontend.templateParts.news')
    {{-- @include('frontend.templateParts.pricing') --}}
    @include('frontend.templateParts.faq')
    @include('frontend.templateParts.blogs')
    @include('frontend.templateParts.project')
    @include('frontend.templateParts.testimonial')
    @include('frontend.templateParts.teams')
@endsection
