@extends('frontend.master')

@section('title_and_meta')
    <title>Welcome To LaravelUK Community - The most exciting Laravel community in the UK</title>
    <meta name="title" content="Welcome To LaravelUK Community - The most exciting Laravel community in the UK" />
    <meta name="description" content="A Community of web developers in the UK using Laravel and other technologies" />
    <meta name="og_title" content="Welcome To LaravelUK Community - The most exciting Laravel community in the UK" />
    <meta name="og_description" content="A Community of web developers in the UK using Laravel and other technologies" />
@stop

@section('content')
    @include('frontend.partials.header')
    <section class="hero bg-cover bg-center bg-no-repeat bg-fixed flex items-center justify-center">
        <div class="hero-inner text-white text-center">
            <h1 class="mb-2 text-2xl lg:text-5xl">Welcome to Laravel UK</h1>
            <h2>The most exciting developer group in the UK</h2>
        </div>
    </section>
    
    <!-- Introduction to LaravelUK -->
    @include('frontend.home.partials.introduction')
    <!-- / Introduction to LaravelUK -->

    <div class="container mx-auto my-6 bg-white p-6">
        <h2 class="mb-4 text-purple-darker">
            Our Sponsors
        </h2>
        <div class="flex">
            <div class="w-1/4">
                <img class="w-32 h-32" src="https://snapshooter.io/high-restwitter.png" alt="snapshooter.io">
            </div>
            <div class="3/4">
                <p class="mt-6">
                    Many thanks to <a href="https://snapshooter.io" target="_blank" rel="noopener" class="no-underline text-grey-dark">SnapShooter.io</a> for sponsoring the hosting of our website. SnapShooter helps you to schedule frequent customizable DigitalOcean backups of your droplets and volumes.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto my-6 lg:flex">
        <div class="sm:w-full mb-2 lg:w-1/3 bg-white lg:mr-4">
            <h3 class="text-center text-purple-darker my-2">Recent Posts</h3>
            <div class="content p-4 leading-normal">
                @foreach ($posts as $post)
                <div class="flex items-center mb-4">
                    <a href="{{route('profile', $post->author)}}">
                        <img class="w-10 h-10 rounded-full mr-4" src="{{$post->author->avatar}}" alt="{{$post->author->name}}'s Avatar">
                    </a>
                    <div class="text-sm">
                        <p class="text-black leading-none">
                            <a href="{{ route('frontend.posts.show', [$post->post_type, $post]) }}" class="no-underline text-grey-darkest hover:text-purple-darkest ">
                                {{ str_limit($post->title, 40) }}
                            </a>
                        </p>
                        <p class="text-grey-dark">{{$post->created_at->format('jS F Y')}}</p>
                            @foreach ($post->tags as $tag)
                            <a href="https://laraveluk.dev/blog/tag/laraveluk" class="no-underline hover:text-purple-darkest">
                                @if (!$loop->last)
                                    {{$tag}},
                                @else
                                    {{$tag}}
                                @endif
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach

                    <div class="more-posts text-center mt-2">
                        Read more posts from our <a href="{{ url('/blog') }}"class="no-underline text-grey-darkest hover:text-purple-darkest mb-2">Blog</a>
                    </div>
                </div>
            </div>

            <div class="sm:w-full mb-2 lg:w-1/3 bg-white lg:mr-4">
                <h3 class="text-center text-purple-darker my-2">Interviews</h3>
                <div class="content p-4 leading-normal">
                    <!-- Hard coded for now -->
                    Laravel UK recently had a chat with one of us, Simon Bennet, creator of Snapshooter.io <a href="/blog/interviews/laravel-talks-to-simon-bennett-of-snapshooter-io-2">Read more</a>
                </div>
            </div>

            <div class="sm:w-full mb-2 lg:w-1/3 sm:mb-2 bg-white">
                <h3 class="text-center text-purple-darker my-2">Resources</h3>
                <div class="content p-4 leading-normal">
                    Watch this space for a list of helpful resources and links shared by our members
                </div>
            </div>
        </div>
@endsection
