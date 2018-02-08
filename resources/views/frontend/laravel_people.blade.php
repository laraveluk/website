@extends('frontend.master')

@section('title_and_meta')
    <title>Welcome To LaravelUK Community - Celebrating Top Laravel People</title>
    <meta name="title" content="Welcome To LaravelUK Community - Celebrating Top Laravel People" />
    <meta name="description" content="Welcome To LaravelUK Community - Celebrating Top Laravel People" />
    <meta name="og_title" content="Welcome To LaravelUK Community - Celebrating Top Laravel People" />
    <meta name="og_description" content="Welcome To LaravelUK Community - Celebrating Top Laravel People" />
@stop

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
                <a href="https://larahack.com">Larahack</a>.</p>
        </section>

        <div class="py-8 mx-4 lg:mx-0">
            <!-- Section start -->
            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-8">
                    {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://pbs.twimg.com/profile_images/787796804301533184/eaQsLz6d_400x400.jpg')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Michael Dyrynda</h3>
                        <p>I've been using Laravel since 2012 and have been around the community in some way or another ever since! Most notably, I'm one of the co-hosts of the <a href="https://laravel-news.com/podcast" target="_blank">Laravel News</a> and <a href="http://www.northmeetssouth.audio" target="_blank">North Meets South</a> podcasts. </p>
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
                        <p>Founder of UserScape. We've been involved with Laravel since near the beginning. We currently run <a href="https://laracon.net">Laracon Online</a>, <a href="https://larajobs.com">LaraJobs</a>, and <a href="https://laratalent.com">LaraTalent</a> as well as participate in a number of Laravel community events.</p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/ianlandsman" class="text-white no-underline hover:underline p-2">@ianlandsman</a>
                        <a href="https://ianlandsman.com" class="text-white no-underline hover:underline p-2">https://ianlandsman.com</a>
                    </div>
                </section>
            </section>
            <!-- Section ends -->

            <!-- Section start -->
            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
                    {{-- Add your profile pic --}}
                <figure class="w-full md:w-1/5 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://pbs.twimg.com/profile_images/829704528522047488/MUgBrW2J_400x400.jpg')"></figure>
                <section class="flex flex-col justify-between w-full md:w-4/5">
                    {{-- Your name and a bit about you --}}
                    <div class="p-4 text-lg leading-normal">
                        <h3 class="text-xl mb-2">Laura Elizabeth</h3>
                        <p>I run <a href="https://designacademy.io">Design Academy</a> which aims to help developers conquer their fear of design (yes, it can be done!). I'm also the owner of <a href="https://client-portal.io">Client Portal</a> which is a client-friendly way to keep your projects organised. I spoke at both Laracon US and EU, have been lucky enough to work with Ian Landsman on LaraTalent, and currently working on a few other Laravel based projects. </p>
                    </div>
                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/laurium" class="text-white no-underline hover:underline p-2">@laurium</a>
                        <a href="https://designacademy.io" class="text-white no-underline hover:underline p-2">https://designacademy.io</a>
                    </div>
                </section>
            </section>
            <!-- Section ends -->
        </div>


    </article>

@stop
