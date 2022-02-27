<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.0.js')}}"></script>
        <title>Zamaka Admin</title>
    </head>
    <body>
        <x-admin-header/>
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

        let elements = document.querySelectorAll("[data-menu]");
        for (let i = 0; i < elements.length; i++) {
            let main = elements[i];
            main.addEventListener("click", function () {
                let element = main.parentElement.parentElement;
                let andicators = main.querySelectorAll("img");
                let child = element.querySelector("ul");
                if (child.classList.contains("opacity-0")) {
                    child.classList.remove("invisible");
                    child.classList.add("visible");
                    child.classList.add("opacity-100");
                    child.classList.remove("opacity-0");
                    andicators[0].style.display = "block";
                    andicators[1].style.display = "none";
                } else {
                    child.classList.add("invisible");
                    child.classList.remove("visible");
                    child.classList.remove("opacity-100");
                    child.classList.add("opacity-0");
                    andicators[0].style.display = "none";
                    andicators[1].style.display = "block";
                }
            });
        }
        var tableDetails = document.getElementsByClassName("detail-row");
        for (var i = 0; i < tableDetails.length; i++) {
            tableDetails[i].getElementsByTagName("td")[0].classList.add("hidden");
        }

        function dropdownFunction(element) {
            var single = element.getElementsByClassName("dropdown-content")[0];
            single.classList.toggle("hidden");
        }

        function accordionHandler(element) {
            var single = element.parentElement.parentElement.parentElement.nextElementSibling.children[0];
            single.classList.toggle("hidden");
        }
        function tableInteract(element) {
            var single = element.parentElement.parentElement.parentElement;
            single.classList.toggle("dark:bg-gray-700");
            single.classList.toggle("bg-gray-100");
        }
        function checkAll(element) {
            let rows = element.parentElement.parentElement.parentElement.parentElement.nextElementSibling.children;
            for (var i = 0; i < rows.length; i++) {
                if (element.checked) {
                    rows[i].classList.add("bg-gray-100");
                    rows[i].classList.add("dark:bg-gray-700");
                    let checkbox = rows[i].getElementsByTagName("input")[0];
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                } else {
                    rows[i].classList.remove("bg-gray-100");
                    rows[i].classList.remove("dark:bg-gray-700");
                    let checkbox = rows[i].getElementsByTagName("input")[0];
                    if (checkbox) {
                        checkbox.checked = false;
                    }
                }
            }
        }
    </script>
</html>
