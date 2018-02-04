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

        <section class="py-8 max-w-lg mx-auto text-lg leading-normal text-grey-darkest">
            <p>These wonderful folk contribute so much to the Laravel community.
                They have also been fantastically wonderful to make a commit to our website codebase during
                <a href="https://larahack.com">Larahack</a>.</p>
        </section>

        <section class="flex max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
                {{-- Add your profile pic --}}
            <figure class="w-2/3 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://placeimg.com/640/480/people')"></figure>
            <section class="flex flex-col justify-between">
                {{-- Your name and a bit about you --}}
                <div class="p-4 text-lg leading-normal">
                    <h3 class="text-xl mb-2">A LaraCeleb was here</h3>
                    <p>I am a Laravel Celebrity! I am a sample post that will be
                        removed when the first Laravel Person commits.</p>
                </div>
                <div class="bg-red px-4 py-3 text-right">
                    <a href="https://twitter.com/laraCeleb" class="text-white no-underline hover:underline p-2">@twitterHandle</a>
                    <a href="https://example.com" class="text-white no-underline hover:underline p-2">https://example.com</a>
                </div>
            </section>
        </section>
    </article>

@stop
