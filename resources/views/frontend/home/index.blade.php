@extends('frontend.master')

@section('title_and_meta')
    <title>Welcome To LaravelUK Community - The most exciting Laravel community in the UK</title>
    <meta name="title" content="Welcome To LaravelUK Community - The most exciting Laravel community in the UK" />
    <meta name="description" content="A Community of web developers in the UK using Laravel and other technologies" />
    <meta name="og_title" content="Welcome To LaravelUK Community - The most exciting Laravel community in the UK" />
    <meta name="og_description" content="A Community of web developers in the UK using Laravel and other technologies" />
@stop

@section('content')
    <!-- Header
    @include('frontend.partials.header') -->
    <!-- / Header -->

    <!-- Hero -->
    @include('frontend.home.partials.hero')
    <!-- / Hero -->

    <!-- Introduction to LaravelUK -->
    @include('frontend.home.partials.introduction')
    <!-- / Introduction to LaravelUK -->
    
    <!-- LaravelUK Sponsors -->
    @include('frontend.home.partials.sponsor')
    <!-- / LaravelUK Sponsors -->

    <div class="container mx-auto my-6 lg:flex">
        <!-- Latest Posts -->
        @include('frontend.home.partials.latest-posts')
        <!-- / Latest Posts -->

        <!-- Latest Interviews -->
        @include('frontend.home.partials.latest-interviews')
        <!-- / Latest Interviews -->

        <!-- Latest Resources -->
        @include('frontend.home.partials.latest-resources')
        <!-- / Latest Resources -->    
    </div>
@endsection
