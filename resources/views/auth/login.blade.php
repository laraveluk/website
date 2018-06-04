@extends('frontend.master')

@section('content')

    @include('frontend.partials.header')

    <div class="w-full">
        <div class="w-full flex flex-col items-center justify-center bg-grey-lighter font-sans min-h-screen-header">
            <div class="container mx-auto">
                <div class="md:w-full sm:w-full lg:w-1/2 lg:max-w-l mx-auto border border-grey p-8 md:pt-0 rounded bg-white">
                    <div class="text-center">
                        <h2 class="text-blue-light text-5xl mb-8 text-center md:-mt-8 bg-grey-lighter inline-block px-4 bg-white border border-grey rounded  py-2">Login</h2>
                    </div>

                    <div class="flex flex-col items-center justify-center pb-8 border-b border-grey mb-8">
                        <a href="{{route('login.slack')}}">
                            <img src="https://platform.slack-edge.com/img/sign_in_with_slack@2x.png" class="w-3/4 mx-auto block mb-4 hover:shadow-md rounded-lg" />
                        </a>
                        <p class="text-grey-dark text-xs"><i class="fas fa-"></i> If you're logging in with Slack, make sure you are not currently switched to another slack team in the browser.</p>
                    </div>

                    <form role="form" class="mb-4" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="mb-6">
                            <label for="email" class="block text-grey-dark text-lg font-bold md:text-left mb-2 pr-4">Email</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-lightest" id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                            <span class="text-red  inline-block mt-4">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block text-grey-dark text-lg font-bold md:text-left mb-2 pr-4">Password</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" name="password" type="password" placeholder="******************">
                        </div>

                        <div class="md:flex md:items-center">
                            <button type="submit" class="shadow bg-red hover:bg-purple-light text-white font-bold text-lg py-3 px-8 rounded m-0">Login</button>
                            <a class="text-grey-dark ml-4 no-underline hover:text-blue-navy" href="{{ route('password.request') }}">Forgot your password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
