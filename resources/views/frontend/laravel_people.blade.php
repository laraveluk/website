@extends('frontend.master')

@section('title_and_meta')
    <title>Welcome To LaravelUK Community - Celebrating Top Laravel People</title>
    <meta name="title" content="Welcome To LaravelUK Community - Celebrating Top Laravek People" />
    <meta name="description" content="Welcome To LaravelUK Community - Celebrating Top Laravek People" />
    <meta name="og_title" content="Welcome To LaravelUK Community - Celebrating Top Laravek People" />
    <meta name="og_description" content="Welcome To LaravelUK Community - Celebrating Top Laravek People" />
@stop

@section('content')
    <div class="w-full">
        <div class="page-heading text-center my-8">
            <h1 class="text-red">Laravel People</h1>
        </div>


        <div class="flex justify-center">
            <div class="rounded rounded-t-lg shadow my- p-4">
                <div class="flex justify-center mt-8">
                    <img src="https://i.imgur.com/8Km9tLL.jpg" class="rounded-full border-solid border-white border-2 -mt-3">
                </div>
                <div class="text-center px-3 pb-6 pt-2">
                    <h3 class="text-black text-sm bold font-sans">Laravela Artisan</h3>
                </div>
                <div class="note">
                    <p class="mt-2 font-sans font-light text-grey-dark">
                        I am a Laravel Celebrity! I am a sample post that will be removed when the first Laravel Person commits
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop