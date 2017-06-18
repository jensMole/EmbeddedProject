<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{asset('js/jsgrid-1.5.3/jsgrid.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('js/jsgrid-1.5.3/jsgrid-theme.min.css')}}" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('js/jsgrid-1.5.3/jsgrid.min.js')}}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,600" rel="stylesheet" type="text/css"/>
    
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
<!--<script src="{{ asset('js/app.js') }}"></script>-->
</body>
</html>
