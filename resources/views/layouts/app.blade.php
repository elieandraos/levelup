<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Level Up LANS') }}</title>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
    <top-menu :csrf="'{!! csrf_token() !!}'" name="{!! Auth::user()->name !!}"></top-menu>
    <side-menu></side-menu>

    <div class="container-fluid" id="page-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <main>
                        @yield('content')
                    </main>
                </div>
                <div style="margin-top: 60px;padding-bottom: 30px;text-align: center;width: 100%;color:#999">
                    Level Up LANS <br/>
                    {{ date('Y') }} &copy;
                    All Rights Reserved
                </div>
            </div>
        </div>
    </div>

    <flash message="{!! session('flash') !!}"></flash>
</div>
</body>
</html>
