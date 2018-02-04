@extends('frontend.master')

@section('title_and_meta')
    <title>LaravelUK - {{$post->title}}</title>
    <meta name="title" content="LaravelUK - {{$post->title}}" />
    <meta name="description" content="LaravelUK - {{$post->title}}" />
    <meta name="og_title" content="LaravelUK - {{$post->title}}" />
    <meta name="og_description" content="LaravelUK - {{$post->title}}" />
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
            {{-- <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains"> --}}
            <div class="px-6 py-4">
                <div class="mb-2">Posted by <a href="">{{$post->author->name}}</a> - {{ $post->created_at->format('jS F Y') }}</div>
                <p class="text-grey-darker text-base">
                    {!! nl2br($post->body) !!}
                    @if (auth()->check())
                        <div class="px-1 py-4 mb-4">
                            <a href="/members/#/blog/{{$post->slug}}" class="bg-blue-light hover:bg-blue text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded">View / Edit in Backend</a>
                        </div>
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
