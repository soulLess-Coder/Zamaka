<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
        <script type="module" src="{{ asset('node_modules/js-cookie/dist/js.cookie.mjs') }}"></script>
        <script nomodule defer src="{{asset('node_modules/js-cookie/dist/js.cookie.js')}}"></script>
        <title>Zamaka</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Fonts SEN from google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" crossorigin="anonymous" rel="stylesheet">
    </head>
    <body class="">
        <x-header/>
            @stack('styles')
            @yield('content')
        <x-footer/>
        <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    </body>
    <script>
        $( "#mobile-button" ).click(function() {
            $( "#mobile-menu" ).toggle();
        });
        $( "#avatar" ).click(function() {
            $( "#drop-down" ).toggle();
        });
    </script>
</html>
