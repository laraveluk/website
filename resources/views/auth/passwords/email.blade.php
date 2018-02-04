@extends('frontend.master')

@section('content')

@include('frontend.partials.header')

<div class="flex justify-center items-center w-screen h-screen">
    <div class="flex content-center">
        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
            <div class="bg-blue-dark shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col text-blue-lightest">

                </br>
                <div class="text-white font-bold flex content-center">
                RESET PASSWORD
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
                </br>

                <div class="flex i">
                    <button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded" type="submit">
                        Send Password Reset Link
                    </button>

                </div>

            </div>
        </form>
    </div>
</div>











@extends('frontend.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
