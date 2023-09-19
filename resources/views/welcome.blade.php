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


            {{-------------------------------- SECTION WHY CHOOSE US ---------------------------------}}
            <div class="flex flex-col justify-center h-[700px] lg:h-[190px] mx-auto m-10">
                <div>
                    {{-- <hr class="-mb-7 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r "> --}}
                    <h1 class="text-center font-bold mb-16 text-5xl bg-white">¿Por qué elegirnos?</h1>
                </div>
                <div class="grid grid-cols-4 px-28">
                    <div class="mx-auto hover:bg-gradient-to-r from-green-300 to-teal-300 rounded-xl w-44 h-44 duration-500 border border-none hover:border-black">
                        <div class="p-2 bg-gradient-to-r from-teal-300 to-green-300 rounded-xl rotate-45 w-44 h-44 border-2 border-black">
                            <div class="flex flex-col mx-auto items-center text-center -rotate-45">
                                <img src="{{ asset('img/plataform.png') }}" alt="" class="w-20">
                                <h2 class="font-bold py-2 text-xl">Plataforma Intuitiva</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto hover:bg-gradient-to-r from-green-300 to-teal-300 rounded-xl w-44 h-44 duration-500 border border-none hover:border-black">
                        <div class="p-2 bg-gradient-to-r from-teal-300 to-green-300 rounded-xl rotate-45 w-44 h-44 border-2 border-black">
                            <div class="flex flex-col mx-auto items-center text-center -rotate-45">
                                <img src="{{ asset('img/check.png') }}" alt="" class="w-20">
                                <h2 class="font-bold py-2 text-xl">Soluciones Eficaces</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto hover:bg-gradient-to-r from-green-300 to-teal-300 rounded-xl w-44 h-44 duration-500 border border-none hover:border-black">
                        <div class="p-2 bg-gradient-to-r from-teal-300 to-green-300 rounded-xl rotate-45 w-44 h-44 border-2 border-black">
                            <div class="flex flex-col mx-auto items-center text-center -rotate-45">
                                <img src="{{ asset('img/unido.png') }}" alt="" class="w-20">
                                <h2 class="font-bold py-2 text-xl">Gestión<br>Integral</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto hover:bg-gradient-to-r from-green-300 to-teal-300 rounded-xl w-44 h-44 duration-500 border border-none hover:border-black">
                        <div class="p-2 bg-gradient-to-r from-teal-300 to-green-300 rounded-xl rotate-45 w-44 h-44 border-2 border-black">
                            <div class="flex flex-col mx-auto items-center text-center -rotate-45">
                                <img src="{{ asset('img/accesible.png') }}" alt="" class="w-20">
                                <h2 class="font-bold py-2 text-xl">Acceso<br>Rápido</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-------------------------------- SECTION CARDS ---------------------------------}}
            <x-cards-index/>

    </body>
</html>
