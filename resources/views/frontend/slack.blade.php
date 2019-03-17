@extends('frontend.master')

@section('content')

    @include('frontend.slack.partials.hero')

    <div class="w-full">
        <div class="w-full flex flex-col items-center justify-center bg-grey-lighter font-sans min-h-screen-header">
            <div class="container mx-auto mt-4 mb-8">
                <div class="md:w-full sm:w-full lg:w-1/2 lg:max-w-l mx-auto border border-grey p-8 my-8 md:pt-0 rounded bg-white">
                    <div class="text-center">
                        <div class="mb-8 text-center md:-mt-8 bg-grey-lighter inline-block bg-white border border-grey rounded p-0">
                            <img src="/images/slack-mark.png" alt="Slack" class="w-24 h-24" />
                        </div>
                    </div>
                    <p class="mb-6 font-light text-grey-darkest leading-normal text-left md:text-xl">To join the LaravelUK Slack community you can request an invite by submitting your email address below.</p>

                    <form method="post">
                        {{ csrf_field() }}
                        <div class="mb-6">
                            <label for="email" class="block text-grey-dark text-lg font-bold md:text-left mb-2 pr-4">Email</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-lightest" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                            <span class="text-red  inline-block mt-4">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class="md:flex md:items-center">
                            <button type="submit" class="shadow bg-red hover:bg-purple-light text-white font-bold text-lg py-3 px-8 rounded m-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
