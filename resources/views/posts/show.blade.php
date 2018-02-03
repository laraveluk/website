@extends('frontend.master')

@section('title_and_meta')
    <title>LaravelUK - {{$post->title}}</title>
    <meta name="title" content="LaravelUK - News and Updates" />
    <meta name="description" content="LaravelUK - News and Updates" />
    <meta name="og_title" content="LaravelUK - News and Updates" />
    <meta name="og_description" content="LaravelUK - News and Updates" />
@stop


@section('content')
    @include('frontend.partials.header')
    <article class="max-w-2xl mx-auto">
        <header class="p-8 text-center">
            <h1 class="tracking-tight text-5xl text-red">{{$post->title}}</h1>
        </header>
    </article>
    <div class="flex flex-wrap max-w-2xl mx-auto">
        <div class="w-full rounded bg-white overflow-hidden shadow-lg">
            {{-- @todo blog image --}}
            {{-- <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains"> --}}
            <div class="px-6 py-4">
                <div class="mb-2">Posted by <a href="">{{$post->author->name}}</a> - {{ $post->created_at->format('jS F Y') }}</div>
                <p class="text-grey-darker text-base">
                    {!! nl2br($post->body) !!}
                </p>
            </div>
            {{-- @todo blog tags --}}
{{--             <div class="px-6 py-4">
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
            </div> --}}
        </div>
        {{-- @todo blog comments --}}
    </div>
@endsection
