@extends('frontend.master')
@include('frontend.partials.header')

@section('content')

    <div class="py-6 pb-8 pt-20 md:pt-16 w-full">
        <div class="h-100 w-full flex items-center justify-center bg-grey-lighter font-sans">
            <div class="bg-blue-dark rounded shadow p-6 m-4 md:w-full sm:w-full lg:w-3/4 lg:max-w-lg">
                <form role="form" class="mb-4" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="lg:w-1/8 md:w-1/4 mb-6">
                        <div class="text-white p-2">Login with </div>
                        <a href="{{ route('login.slack') }}">
                            <img src="{{ asset('/images/slack-button.png') }}"
                                 class="rounded py-2 px-3 bg-white hover:bg-grey w-32 hover:bg-green-lighter">
                        </a>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3"><label for="email"
                             class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Email
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-lightest" id="name" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label for="password"
                                                 class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Password
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" name="password" type="password" placeholder="******************">
                   </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button type="submit"
                                    class="shadow bg-red hover:bg-purple-light text-white font-bold py-2 px-4 rounded">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection