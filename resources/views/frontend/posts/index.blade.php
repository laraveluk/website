@extends('frontend.master')

@section('content')
    @include('frontend.posts.partials.hero')
    <div class="bg-white min-h-50 py-12 px-4 md:p-12 ">
        <div class="flex flex-col max-w-2xl mx-auto md:flex-row md:flex-wrap">
            <div class="flex flex-row items-center w-full border-b border-grey-light md:mx-4">
                @if (!isset($title))
                    <div class="flex mx-auto font-bold text-lg md:text-3xl md:flex-grow md:mx-0">
                        <a href="/blog" class="no-underline text-grey-light pb-4 border-b -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy">
                            All
                        </a>
                        <a href="/blog/news" class="no-underline text-grey-light pb-4 border-b border-grey-light -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy pb-4">News</a>
                        <a href="/blog/interviews" class="no-underline text-grey-light pb-4 border-b border-grey-light -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy">Interviews</a>
                        <a href="/blog/events" class="no-underline text-grey-light pb-4 border-b border-grey-light -mb-px hover:text-blue-navy hover:border-blue-navy">Events</a>
                    </div>
                    @if (auth()->check())
                        <a href="/members/#/blog/create" class="hidden bg-blue-navy text-white no-underline py-2 font-bold px-4 rounded text-sm uppercase shadow md:block">
                            Create
                        </a>
                    @endif
                @else
                    <h1 class="tracking-tight text-2xl text-red mb-8 w-full md:text-3xl">{{$title}}</h1>
                @endif
            </div>
            @if (auth()->check())
                <a href="/members/#/blog/create" class="bg-blue-navy text-white no-underline py-2 font-bold px-4 rounded text-sm uppercase mx-auto mt-8 shadow md:hidden">
                    Create
                </a>
            @endif
            @unless($posts->isEmpty())
            @foreach($posts as $post)
                <div class="flex flex-col w-full md:w-1/2 mt-8">
                    <div class="flex flex-col h-full border border-grey-light bg-white p-6 leading-normal rounded shadow mx-4">
                        <p class="text-xs uppercase text-grey-dark flex items-center">
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
                        <div class="flex flex-col flex-grow mb-4">
                            <a href="{{route('frontend.posts.show', [$post->post_type, $post])}}" class="no-underline text-blue-navy font-bold text-lg md:text-xl">{{ $post->title }}</a>
                            <p class="text-grey-darkest font-light leading-normal md:text-lg">{!! $post->excerpt !!}</p>
                        </div>
                        <div class="flex items-center">
                            {{-- <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink"> --}}
                            <div class="text-sm">
                                <p class="text-grey-darkest leading-none font-light">{{ $post->author->name }}</p>
                                <p class="text-grey-dark font-light">{{ $post->created_at->format('jS F Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else    
                <h2 class="text-center mx-auto text-lg text-grey-darkest font-light mt-8">
                    There's nothing here yet :(
                </h2>
            @endunless
        </div>
    </div>
@endsection
