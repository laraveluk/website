@extends('frontend.master')

@section('content')
    @include('frontend.partials.header')
    <article class="max-w-2xl mx-auto">
        <header class="p-8 text-center">
            @if (auth()->check())
            <a href="/members/#/blog/create" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 float-right no-underline rounded">
                @if (request()->type)
                    Create {{ucwords(str_singular(request()->type))}}
                @else
                    Create Post
                @endif
            </a>
            @endif
            @if (!isset($title))
            <h1 class="tracking-tight text-5xl text-red">
                @if (request()->type)
                    LaravelUK - {{ ucwords(request()->type) }}
                @else
                    LaravelUK - News and Updates
                @endif
            </h1>
            @else
            <h1 class="tracking-tight text-5xl text-red">{{$title}}</h1>
            @endif
        </header>
    </article>
    <div class="flex flex-wrap max-w-2xl mx-auto">
        @unless($posts->isEmpty())
        @foreach($posts as $post)
            <div class="w-full sm:w-full md:w-1/2 mb-4 bg-grey">
                <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal m-2">
                    <p class="text-sm text-grey-dark flex items-center">
                        @switch($post->post_type)
                            @case('post')
                            News
                                @break
                            @case('tutorials')
                                Tutorial
                                @break
                            @case('events')
                                Event
                                @break
                            @case('interviews')
                                Interview
                                @break
                            @default
                                News
                                @break
                        @endswitch
                    </p>
                    <div class="mb-8">
                        <div class="text-black font-bold text-xl mb-2"><a href="{{route('frontend.posts.show', [$post->post_type, $post])}}" class="no-underline">{{$post->title}}</a></div>
                        <p class="text-grey-darker text-base">{!! $post->excerpt !!}</p>
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
        @else
            <div class="w-full mb-4 bg-grey">
                <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal m-2">
                    <h2 class="text-center">
                        @if (request()->type)
                        There are no {{request()->type}} yet. Check back soon!
                        @else
                        There are no posts yet.
                        @endif
                    </h2>
                </div>
            </div>
        @endunless
    </div>
@endsection
