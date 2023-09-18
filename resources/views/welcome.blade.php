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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>

            .navbar {
            background-color: #F2F2F2;
            transition: background-color 0.4s;
            }
            .navbar a:hover {
            color: white;
            background-color: #000000af;
            transition: background-color 0.4s;
            }

            .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.391);
            color: white;
            }
        </style>
    </head>
    <body>
            {{-------------------------------- NAVEGATION BAR ---------------------------------}}
            <x-navbar-index />


            {{-------------------------------- SECTION IMAGE ---------------------------------}}
           <x-image-index />


            {{-------------------------------- SECTION IMAGE ---------------------------------}}
            <div class="flex flex-col justify-center h-[700px] mx-auto px-28">
                <h1 class="text-center font-bold py-4 text-5xl">¿Por qué elegirnos?</h1>
                <div class="grid grid-cols-2">
                    <div>
                        <h2 class="text-center font-bold py-4 text-2xl">Plataforma Intuitiva</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aliquid, modi ad ut omnis odit quasi quas corrupti mollitia est distinctio ipsum consectetur eaque eligendi possimus iusto nulla id corporis?</p>
                    </div>
                    <div>
                        <h2 class="text-center font-bold py-4 text-2xl">Soluciones Eficaces</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, accusantium! Necessitatibus optio debitis magnam corporis voluptate tempora libero quisquam ab impedit, incidunt a voluptatum accusamus quod minus ullam eligendi repellat?</p>
                    </div>
                </div>
            </div>

            {{-------------------------------- SECTION CARDS ---------------------------------}}
            <x-cards-index/>

    </body>
</html>
