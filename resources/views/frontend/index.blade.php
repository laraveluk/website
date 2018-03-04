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

    <div class="container mx-auto my-6 bg-white p-6">
        <h2 class="mb-4 text-purple-darker">
            Hello and welcome to Laravel UK community.
        </h2>
        <p class="leading-normal text-lg mb-4">
            If you are already a member of the LaravelUK Slack community, then you will know what an amazing place it is to be. If you haven’t joined us yet, then you really should.
        </p>
        <p class="leading-normal text-lg mb-4">
            The skill levels range from learner to decades of experience in PHP and many other languages and from junior Devs to business owners, entrepreneurs, conference speakers and book authors.

            All you need to do is sign up at
            <a href="https://laraveluk.signup.team/" class="no-underline text-grey-darkest hover:text-blue-light">https://laraveluk.signup.team/</a>
        </p>
        <p class="leading-normal text-lg">
            See you soon :-)
        </p>
    </div>

    <div class="container mx-auto my-6 bg-white p-6">
        <h2 class="mb-4 text-purple-darker">
            Up-coming Events.
        </h2>
        <p class="leading-normal text-lg mb-4">
            Larahack - Date to be announced soon. Watch this space!
        </p>
    </div>

    <div class="container mx-auto my-6 lg:flex">
       <div class="sm:w-full mb-2 lg:w-1/3 bg-white lg:mr-4">
           <h3 class="text-center text-purple-darker my-2">Recent Posts</h3>
           <div class="content p-4 leading-normal">
               @foreach ($posts as $post)
                    <a href="{{ $post->slug }}"
                       class="no-underline text-grey-darkest hover:text-purple-darkest mb-2">
                        {{ str_limit($post->title, 40) }}
                    </a>
               @endforeach

               <div class="more-posts text-center mt-2">
                   Read more posts from our
                   <a href="{{ url('/blog') }}"
                      class="no-underline text-grey-darkest hover:text-purple-darkest mb-2">
                       Blog
                   </a>
               </div>
           </div>
       </div>
        <div class="sm:w-full mb-2 lg:w-1/3 bg-white lg:mr-4">
            <h3 class="text-center text-purple-darker my-2">Interviews</h3>
            <div class="content p-4 leading-normal">
                <!-- Hard coded for now -->
                Laravel UK recently had a chat with one of us, Simon Bennet, creator of Snapshooter.io
                <a href="/blog/interviews/laravel-talks-to-simon-bennett-of-snapshooter-io-2">
                    Read more
                </a>
            </div>
        </div>
        <div class="sm:w-full mb-2 lg:w-1/3 sm:mb-2 bg-white">
            <h3 class="text-center text-purple-darker my-2">Resources</h3>
            <div class="content p-4 leading-normal">
               Watch this space for a list of helpful resources and links shared by our members
            </div>
        </div>
    </div>


@stop