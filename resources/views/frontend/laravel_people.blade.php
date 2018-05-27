@extends('frontend.master')

@section('content')
    @include('frontend.partials.header')

    <article class="max-w-2xl mx-auto">
        <header class="p-8 text-center">
            <h1 class="tracking-tight text-5xl text-red">Laravel People</h1>
            <h2 class="text-grey-dark font-normal">(or LaraCelebs)</h2>
        </header>

        <section class="px-8 md:px-0 py-8 max-w-lg mx-auto text-lg leading-normal text-grey-darkest">
            <p>These wonderful folk contribute so much to the Laravel community.
                They have also been fantastically wonderful to make a commit to our website codebase during
                <a href="https://larahack.com" class="red-link">Larahack</a>.</p>
        </section>

        <div class="py-8 mx-4 lg:mx-0">

            <!-- Section start -->

            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-8">
                    {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://pbs.twimg.com/profile_images/378800000501505377/4df558a3066b7c67e33204d665f7954f_400x400.jpeg')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Eric L. Barnes</h3>
                        <p>Founder and creator of <a href="https://laravel-news.com" class="red-link">Laravel News</a> and run a weekly <a href="https://laravel-news.com/newsletter" class="red-link">Laravel Newsletter</a>. I've been using Laravel since before it was cool. I love the community and thankful to be a part of it!</p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/ericlbarnes" class="text-white no-underline hover:underline p-2">@ericlbarnes</a>
                        <a href="https://ericlbarnes.com" class="text-white no-underline hover:underline p-2">https://ericlbarnes.com</a>
                    </div>
                </section>
            </section>

            <!-- Section ends -->

            <!-- Section start -->

            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-8">
                    {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://avatars2.githubusercontent.com/u/558441?s=400&v=4')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Michael Dyrynda</h3>
                        <p>I've been using Laravel since 2012 and have been around the community in some way or another ever since! Most notably, I'm one of the co-hosts of the <a href="https://laravel-news.com/podcast" class="red-link" target="_blank">Laravel News</a> and <a href="http://www.northmeetssouth.audio" class="red-link" target="_blank">North Meets South</a> podcasts. </p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/michaeldyrynda" class="text-white no-underline hover:underline p-2">@michaeldyrynda</a>
                        <a href="https://dyrynda.com.au" class="text-white no-underline hover:underline p-2">https://dyrynda.com.au</a>
                    </div>
                </section>
            </section>

            <!-- Section ends -->

            <!-- Section start -->
            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-8">
                    {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://pbs.twimg.com/profile_images/591437812932608000/oeuRzWJo_400x400.jpg')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Ian Landsman</h3>
                        <p>Founder of UserScape. We've been involved with Laravel since near the beginning. We currently run
                            <a href="https://laracon.net" class="red-link">Laracon Online</a>,
                            <a href="https://larajobs.com" class="red-link">LaraJobs</a>, and
                            <a href="https://laratalent.com" class="red-link">LaraTalent</a> as well as participate in a number of Laravel community events.</p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/ianlandsman" class="text-white no-underline hover:underline p-2">@ianlandsman</a>
                        <a href="https://ianlandsman.com" class="text-white no-underline hover:underline p-2">https://ianlandsman.com</a>
                    </div>
                </section>
            </section>
            <!-- Section ends -->

            <!-- Section start -->
            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-8">
                    {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://pbs.twimg.com/profile_images/829704528522047488/MUgBrW2J_400x400.jpg')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Laura Elizabeth</h3>
                        <p>I run <a href="https://designacademy.io" class="red-link">Design Academy</a> which aims to help developers conquer their fear of design (yes, it can be done!). I'm also the owner of
                        <a href="https://client-portal.io" class="red-link">Client Portal</a> which is a client-friendly way to keep your projects organised.
                        I spoke at both Laracon US and EU, have been lucky enough to work with Ian Landsman on LaraTalent, and currently working on a few other Laravel based projects. </p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/laurium" class="text-white no-underline hover:underline p-2">@laurium</a>
                        <a href="https://designacademy.io" class="text-white no-underline hover:underline p-2">https://designacademy.io</a>
                    </div>
                </section>
            </section>
            <!-- Section ends -->

            <!-- Section start -->
            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-8">
                    {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://pbs.twimg.com/profile_images/869972011291779072/cORueTQM_400x400.jpg')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Matt Stauffer</h3>
                        <p>Co-founder of <a href="https://tighten.co/" class="red-link">Tighten</a> and author of <a href="http://laravelupandrunning.com/" class="red-link">Laravel: Up and Running</a>. I speak at conferences some times, tell people to be nicer to each other, and run the <a href="http://laravelpodcast.com/" class="red-link">Laravel Podcast</a>.</p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/stauffermatt" class="text-white no-underline hover:underline p-2">@stauffermatt</a>
                        <a href="https://mattstauffer.com" class="text-white no-underline hover:underline p-2">https://mattstauffer.com</a>
                    </div>
                </section>
            </section>
            <!-- Section ends -->

            <!-- Section start -->
            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-8">
                    {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://pbs.twimg.com/profile_images/914894066072113152/pWD-GUwG_400x400.jpg')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Taylor Otwell</h3>
                        <p>Creator of Laravel, <a href="https://forge.laravel.com">Forge</a>, <a href="https://envoyer.io">Envoyer</a>, <a href="https://spark.laravel.com">Spark</a>, and more.</p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/taylorotwell" class="text-white no-underline hover:underline p-2">@taylorotwell</a>
                        <a href="http://taylorotwell.com" class="text-white no-underline hover:underline p-2">https://taylorotwell.com</a>
                    </div>
                </section>
            </section>
            <!-- Section ends -->

            <!-- Section start -->
            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-8">
                {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://www.gravatar.com/avatar/3564926bec533732670816999c460a35?s=200')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Alex Garrett-Smith</h3>
                        <p>
                            Founder of <a href="https://codecourse.com">Codecourse</a>. Teaching web development with a healthy dose of Laravel.
                        </p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/alexjgarrett" class="text-white no-underline hover:underline p-2">@alexjgarrett</a>
                        <a href="https://codecourse.com" class="text-white no-underline hover:underline p-2">https://codecourse.com</a>
                    </div>
                </section>
            </section>
            <!-- Section ends -->
        </div>

    </article>

@stop
