@extends('frontend.layouts.app')

@section('title', 'Home')


@include('frontend.pages.home.section.header')

@section('content')
@include('frontend.pages.home.section.hero')

@include('frontend.pages.home.section.satori')

@include('frontend.pages.home.section.event')

@include('frontend.pages.home.section.testimonial')

@include('frontend.pages.home.section.course')

@include('frontend.pages.home.section.session')

@include('frontend.pages.home.section.featured-event')
@endsection
