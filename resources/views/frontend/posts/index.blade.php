@extends('frontend.master')

@section('content')
    @include('frontend.posts.partials.hero')
    <div class="bg-white min-h-50 py-12 px-4 md:p-12 ">
        <div class="flex flex-col max-w-2xl mx-auto md:flex-row md:flex-wrap">
            <post-lists 
              auth="{{ auth()->check() }}" 
              admin="{{ auth()->check() && auth()->user()->hasRole('Admin') }}"
              type="{{ $postType }}"
            ></post-lists>
        </div>
    </div>
@endsection
