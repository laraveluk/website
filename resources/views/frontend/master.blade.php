<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Add title and meta description  --}}
    @yield('title_and_meta')

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body class="font-sans bg-grey">

@yield('content')
<div id="app">

</div>

<script type="text/javascript" src="{{ mix('/js/backend.js') }}"></script>
</body>
</html>
