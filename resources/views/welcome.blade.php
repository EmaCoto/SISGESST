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
            {{-------------------------------- SECTION IMAGE ---------------------------------}}
            <x-image-index />

            {{-------------------------------- SECTION WHY CHOOSE US ---------------------------------}}
            <x-why-choose-index />

            {{-------------------------------- SECTION CARDS ---------------------------------}}
            <x-cards-index/>
        </main>

        <footer>
            <div class="grid grid-cols-4 px-28 bg-[#cbcbcd] text-center text-black py-2 h-32">
                <div class="flex items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-16">
                    <p class="text-[#ff8239] px-3 text-3xl font-extrabold">SISGESST</p>
                </div>
                <div>
                    <h1 class="font-semibold m-2">LEGAL</h1>
                    <div class="flex flex-col justify-center h-16 items-center">
                        <a href="#" class="hover:text-[#ff8239]">Términos</a>
                        <a href="#" class="hover:text-[#ff8239]">Privacidad</a>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold m-2">COMPAÑÍA</h1>
                    <div class="flex flex-col justify-center h-16 items-center">
                        <a href="#" class="hover:text-[#ff8239]">Blog oficial</a>
                        <a href="#" class="hover:text-[#ff8239]">Acerca de nosotros</a>
                        <a href="#" class="hover:text-[#ff8239]">Contáctanos</a>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold m-2">REDES SOCIALES</h1>
                    <div class="h-16 m-auto w-32 flex justify-between items-center">
                        <a href="#" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-square-facebook fa-xl hover:text-blue-800"></i></a>
                        <a href="#" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-linkedin fa-xl hover:text-cyan-600"></i></a>
                        <a href="#" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-square-x-twitter fa-xl hover:text-black"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
