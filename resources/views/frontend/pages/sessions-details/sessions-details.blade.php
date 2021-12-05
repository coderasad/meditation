@extends('frontend.layouts.app')

@section('title', 'Sesssions Details')


@section('content')
@include('frontend.pages.sessions-details.section.banner')
@include('frontend.pages.sessions-details.section.session-details')
{{--@include('frontend.pages.sessions-details.section.reviews')--}}
@endsection

