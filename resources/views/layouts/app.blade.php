<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
        <title>Zamaka</title>
    </head>
    <body class="bg-neutral-300">

        <x-header/>
        @yield('content')

    </body>
    <script>
        $( "#mobile-button" ).click(function() {
            $( "#mobile-menu" ).toggle();
    });
    </script>
</html>
