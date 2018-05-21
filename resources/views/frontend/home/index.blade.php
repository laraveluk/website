@extends('frontend.master')

@section('title_and_meta')
    <title>Welcome To LaravelUK Community - The most exciting Laravel community in the UK</title>
    <meta name="title" content="Welcome To LaravelUK Community - The most exciting Laravel community in the UK" />
    <meta name="description" content="A Community of web developers in the UK using Laravel and other technologies" />
    <meta name="og_title" content="Welcome To LaravelUK Community - The most exciting Laravel community in the UK" />
    <meta name="og_description" content="A Community of web developers in the UK using Laravel and other technologies" />
@stop

@section('content')
    <!-- Hero (header included within)-->
    @include('frontend.home.partials.hero')
    <!-- / Hero -->

    <!-- Introduction to LaravelUK -->
    @include('frontend.home.partials.introduction')
    <!-- / Introduction to LaravelUK -->

    <div class="flex flex-col">
        <div class="flex flex-col justify-center items-center container mx-auto py-12 px-4 md:p-12 min-h-75">   
            <!-- LaravelUK Sponsors -->
            @include('frontend.home.partials.sponsor')
            <!-- / LaravelUK Sponsors -->

            <div class="flex flex-col md:flex-row md:-px-4">
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
        </div> 
    </div>
@endsection
