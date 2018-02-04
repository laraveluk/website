@extends('frontend.master')
@include('frontend.partials.header')

@section('content')


<div class="flex justify-center items-center w-screen h-screen">
    <div class="flex content-center">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
            <div class="bg-blue-dark shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col text-blue-lightest">
                <div class="flex items-center justify-between">
                <a href="{{ route('login.slack') }}"><img src="{{ asset('/images/slack-button.png') }}" class="shadow appearance-none border rounded w-full py-2 px-3 bg-white"></a>
                </div>
                </br>
                <div class="text-white font-bold flex content-center">
                OR
                </div>
                </br></br>

                <div class="mb-4">
                    <label class="block text-blue-lightest text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-lightest" id="name" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
        
                    @if ($errors->has('email'))
                    <span class="">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="mb-6">
                    <label class="block text-blue-lightest text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" name="password" type="password" placeholder="******************">
                    <!-- <p class="text-red text-xs italic">Please choose a password.</p> -->
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded" type="submit">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-lightest hover:text-grey-dark" href="{{ route('password.request') }}">
                        Forgot </br> Password?
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection