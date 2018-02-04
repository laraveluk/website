@extends('frontend.master')

@section('title_and_meta')
    <title>LaravelUK - News and Updates</title>
    <meta name="title" content="LaravelUK - News and Updates" />
    <meta name="description" content="LaravelUK - News and Updates" />
    <meta name="og_title" content="LaravelUK - News and Updates" />
    <meta name="og_description" content="LaravelUK - News and Updates" />
@stop


@section('content')
    @include('frontend.partials.header')
    <article class="max-w-2xl mx-auto">
        <header class="p-8 text-center">
            @if (auth()->check())
            <a href="/members/#/blog/create" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 float-right no-underline rounded">Create Post</a>
            @endif
            <h1 class="tracking-tight text-5xl text-red">LaravelUK - News and Updates</h1>
        </header>
    </article>
    <div class="flex flex-wrap max-w-2xl mx-auto">
        @foreach($posts as $post)
            <div class="w-full sm:w-full md:w-1/2 mb-4 bg-grey">
                <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal m-2">
                    <div class="mb-8">
                        <div class="text-black font-bold text-xl mb-2"><a href="{{route('frontend.posts.show', $post)}}" class="no-underline">{{$post->title}}</a></div>
                        <p class="text-grey-darker text-base">{{$post->excerpt}}</p>
                    </div>
                    <div class="flex items-center">
                        {{-- <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink"> --}}
                        <div class="text-sm">
                            <p class="text-black leading-none">{{ $post->author->name }}</p>
                            <p class="text-grey-dark">{{ $post->created_at->format('jS F Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
