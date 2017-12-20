<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GoVlog - MANAGEMENT</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
       @include('_includes.nav.main')
    <div id="app">
        <div class="columns">
            <div class="column is-2">
                 @include('_includes.nav.manage')
            </div>
            <div class="column is-10 m-t-20">
                 @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
<!--     <script src="https://unpkg.com/vue@2.5.2/dist/vue.js"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
