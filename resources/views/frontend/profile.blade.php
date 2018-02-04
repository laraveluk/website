@extends('frontend.master')

@section('title_and_meta')
    <title>Profile - {{ $user['name'] }}</title>
    <meta name="title" content="Profile - {{ $user['name'] }}" />
    <meta name="description" content="Profile - {{ $user['name'] }}" />
    <meta name="og_title" content="Profile - {{ $user['name'] }}" />
    <meta name="og_description" content="Profile - {{ $user['name'] }}" />
@stop

@section('content')
    @include('frontend.partials.header')

    <h1>{{ $user['name'] }}</h1>

    <pre>
        {{ print_r($user) }}
    </pre>


@stop
