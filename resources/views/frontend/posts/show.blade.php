@extends('frontend.master')


@section('content')
    @include('frontend.partials.header')
    <article class="max-w-2xl mx-auto">
        <header class="p-8 text-center">
            <h1 class="tracking-tight text-4xl text-red">{{$post->title}}</h1>
        </header>
    </article>
    <div class="flex flex-wrap max-w-2xl mx-auto">
        <div class="w-full rounded bg-white overflow-hidden shadow">
            {{-- <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains"> --}}
            <div class="px-6 py-4 leading-normal">
                <div class="mb-2">Posted by <a href="">{{$post->author->name}}</a> - {{ $post->created_at->format('jS F Y') }}</div>
                <p class="text-grey-darker text-base">
                    {!! nl2br($post->body) !!}
                    <div class="px-1 py-4 mb-4">
                        @can('update', $post)
                            <a href="/members/#/blog/edit/{{$post->slug}}"
                               class="bg-blue-light hover:bg-blue text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded">
                                Edit
                            </a>
                        @endcan
                        @can('approve', $post)
                          @if (! $post->approved)
                            <approve-button
                              :post_id="{{ $post->id }}">
                            </approve-button>
                            @endif
                        @endcan
                    @foreach ($post->tags as $tag)
                        <a href="{{route('frontend.posts.tags.show', $tag->name)}}" class="bg-transparent border border-blue hover:bg-blue hover:text-white text-blue font-bold py-2 px-4 mx-1 float-right no-underline rounded">
                            {{$tag->name}}
                        </a>
                    @endforeach
                    </div>
                </p>
            </div>
        </div>

        @foreach ($post->comments as $comment)
        <div class="w-full rounded bg-white overflow-hidden shadow mt-6">
            <div class="px-6 py-4">
                <div class="flex items-center">
                    <div class="w-1/4 mb-2 p-2">
                        <div class="inline-block">
                            <img class="w-10 h-10 rounded-full mr-4 " src="{{ $comment->author->avatar }}" alt="Avatar of {{$comment->author->name}}">
                        </div>
                        <div class="inline-block">
                            <p class="text-black leading-none">{{$comment->author->name}}</p>
                            <p class="text-grey-dark">{{$comment->created_at->format('jS M Y H:i')}}</p>
                        </div>
                    </div>
                    <div class="w-3/4 mb-2 p-2">
                        {{$comment->body}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @if (auth()->check())
        <div class="w-full rounded bg-white overflow-hidden shadow-lg mt-6">
            <form action="{{route('frontend.comments.store', [$post->post_type, $post])}}" method="POST">
                {{csrf_field()}}
                <div class="px-6 py-4">
                    <div class="mb-2">Leave a Comment</div>
                    <div class="mb-6">
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" rows="5" name="body" id="body"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
                            Leave Comment
                        </button>
                    </div>
                </div>
            </form>
        </div>
        @else
        <div class="w-full rounded bg-white overflow-hidden shadow-lg mt-6">
            <div class="px-6 py-4 text-center">
                <div class="text-grey-darker p-2">Log in or sign up to leave a comment.</div>
                <div class="text-grey-darker bg-grey p-2">
                    <p>Sign In With</p>
                    <a href="{{ route('login.slack') }}">
                        <img src="{{ asset('/images/slack-button.png') }}" class="rounded py-2 px-3 bg-white hover:bg-green-lighter w-32">
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
