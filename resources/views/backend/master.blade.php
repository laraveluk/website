<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Add title and meta description  --}}
    @yield('title_and_meta')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <script>
        window.App = {!!
            json_encode([
                'signedIn' => auth()->check(),
                'user'     => auth()->user(),
                'is_admin'     => auth()->user()->hasRole(config('laraveluk.site.admin_role_name'))
            ]);
        !!}
    </script>
</head>
<body class="font-sans bg-grey">

    <div id="app">
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ mix('/js/backend.js') }}"></script>

</body>
</html>
