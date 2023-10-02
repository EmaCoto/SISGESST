<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SISGESST</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .navbar {
            background-color: #EEEFF1;
            transition: background-color 0.4s;
            }
            .navbar a:hover {
            top: 0;
            color: white;
            background-color: #0000005e;
            transition: background-color 0.4s;
            }

            .navbar.scrolled {
            background-color: #00000064;
            color: white;
            }
        </style>
    </head>
    <body>

        {{-------------------------------- NAVEGATION BAR ---------------------------------}}
        <x-navbar-index/>

        <main>
            <div class="flex my-6 w-full">
                <div class="flex-col p-10 px-32">
                    {{--------------------------- SECTION ABOUT THE SYSTEM ----------------------------}}
                    <x-about-system />

                    {{--------------------------- SECTION USE GUIDE----------------------------}}
                    <x-use-guide />

                    {{--------------------------- SECTION RESOLUTION----------------------------}}
                    <x-resolution />
                </div>

                {{--------------------- ASIDE -------------------------}}
                <x-aside />
            </div>
        </main>

        <footer>
            <x-footer-home/>
        </footer>
    </body>
</html>
