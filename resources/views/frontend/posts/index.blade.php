@extends('frontend.master')

@section('content')
    @include('frontend.about.partials.hero')
    <div class="flex flex-col bg-white">
        <div class="flex flex-row flex-wrap items-center container mx-auto py-12 px-4 md:p-12 min-h-75">   
            @unless($posts->isEmpty())
            @foreach($posts as $post)
                <div class="w-full md:w-1/2 mb-4">
                    <div class="flex flex-col border border-grey-light bg-white rounded p-4 justify-between leading-normal shadow md:mr-4">
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
                            <div class="text-black font-bold text-xl mb-2">
                                <a href="{{route('frontend.posts.show', [$post->post_type, $post])}}" class="no-underline text-red">{{$post->title}}</a></div>
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
    </div>
@endsection
