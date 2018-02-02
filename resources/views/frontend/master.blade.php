<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel UK - The most exciting coding group in the UK</title>
    <meta name="title" content="Laravel UK - The most exciting coding group in the UK">
    <meta name="description" content="A Commnity of Laravel Developers in the UK and beyond">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

@yield('content')
<div id="app">

</div>

<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
