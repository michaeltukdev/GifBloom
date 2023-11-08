<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    @if(!Auth::check())<link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}">
    @endif
</head>

<body>

    @if(!Auth::check())
    <x-public.auth.login />
    <x-public.auth.register />

    @if(session('show_login')) 
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var loginModal = document.getElementById('loginModal');
    
            if (loginModal) {
                var modal = new bootstrap.Modal(loginModal);
                modal.show();
            }
        });
    </script>
    @endif

    @if(session('show_register')) 
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var loginModal = document.getElementById('registerModal');
    
            if (loginModal) {
                var modal = new bootstrap.Modal(registerModal);
                modal.show();
            }
        });
    </script>
    @endif

    @endif

    <x-public.header />
    @yield('content')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>