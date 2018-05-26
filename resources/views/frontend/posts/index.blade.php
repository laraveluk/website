@extends('frontend.master')

@section('content')
    @include('frontend.posts.partials.hero')
    <div class="bg-white min-h-50 py-12 px-4 md:p-12 ">
        <div class="flex flex-col max-w-2xl mx-auto md:flex-row md:flex-wrap">
            @if (auth()->check())
                <a href="/members/#/blog/create" class="bg-blue-navy text-white no-underline py-2 font-bold px-4 rounded text-sm uppercase mx-auto mt-8 shadow md:hidden">
                    Create
                </a>
            @endif

            <post-lists type="{{ $postType }}"></post-lists>
        </div>
    </div>
@endsection
