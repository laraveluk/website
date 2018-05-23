<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('frontend.partials.metadata')
    <script>
        window.App = {!!
            json_encode([
                'signedIn' => auth()->check(),
                'user'     => auth()->user(),
            ]);
        !!}
    </script>

</head>
<body class="font-sans bg-grey-lightest">
    <div id="app">
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    @yield('js')

    @include('frontend.partials.footer')
</body>
</html>
