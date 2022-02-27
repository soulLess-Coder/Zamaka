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
    <body class="">

        <x-header/>
        @yield('content')
        <x-footer/>
    </body>
    <script>
        $( "#mobile-button" ).click(function() {
            $( "#mobile-menu" ).toggle();
        });
        $( "#avatar" ).click(function() {
            $( "#drop-down" ).toggle();
        });
        var currently_selected;
        function changeSteps(selected){
            if(selected == 1){
            $( "#step2" ).toggleClass("step-primary");
            $( "#step3" ).toggleClass("step-primary");

            $( "#register2" ).toggleClass("hidden");
            $( "#register3" ).toggleClass("hidden");
            }

            if(selected == 2){
            $( "#step2" ).toggleClass("step-primary");
            $( "#step3" ).toggleClass("step-primary");

            $( "#register2" ).toggleClass("hidden");
            $( "#register3" ).toggleClass("hidden");
            }

            if(selected == 3){
            $( "#step2" ).toggleClass("step-primary");
            $( "#step3" ).removeClass("step-primary");

            $( "#register2" ).toggleClass("hidden");
            $( "#register3" ).toggleClass("hidden");
            }
        }

        $( "#step2" ).click(function() {
            changeSteps();
        });
        $( "#step3" ).click(function() {
            changeSteps();
        });
    </script>
</html>
