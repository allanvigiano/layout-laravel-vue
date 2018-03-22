<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="container-fluid">
    
    <header>
        @yield('header-navbar')
    </header>
    <main role="main" style="margin-top: 54px;">
        @yield('header-carousel')

        <div class="row mt-5">
            <div class="col-sm-8 pr-3 border-right border-secondary">
                @yield('content')
            </div>
            <div class="col-sm-4 pl-3">
                @yield('sidebar')
            </div>
        </div>
        
        
        @yield('footer')
    </main>
        

</div>
</body>
</html>
