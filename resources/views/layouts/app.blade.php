<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link
        rel="stylesheet"
        href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        />

        @livewireStyles

        <style>
            /* Set the size of the div element that contains the map */
            #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
            }
        </style>

        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                const uluru = { lat: 21.4619254, lng: 39.200444 };
                // const uluru = 'https://www.google.com/maps/place/%D8%A7%D9%8A%D8%B3+%D9%83%D8%B1%D9%8A%D9%85+10+%D9%8A%D9%88%D9%86%D9%8A%D9%88%E2%80%AD/@,,15z/data=!4m5!3m4!1s0x15c3dbe519ac5d19:0xb0adf1f0859a392b!8m2!3d21.6010947!4d39.1437748';
                // The map, centered at Uluru
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: uluru,
                });
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
            }

            setTimeout(function(){
                window.location.reload(1);
            }, 5000);
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main class="container mx-auto py-4">
                @yield('slot')
            </main>
        </div>
    </body>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA95F1cg5Be9xkKOUH9xDimcpgCvomt0JQ&callback=initMap&libraries=&v=weekly"
    async
    ></script>
</html>