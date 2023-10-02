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
    <body class="flex flex-col h-screen">

        {{-------------------------------- NAVEGATION BAR ---------------------------------}}
        <x-navbar-index/>

        <main class="flex-grow flex text-xl">
            {{-------------------------------- SECTION IMAGE ---------------------------------}}
            <form class="w-3/4 h-full flex flex-col">
                <div class="w-1/2 p-4 m-auto rounded-lg bg-white shadow-lg border border-black border-opacity-5">
                    <h1 class="text-center font-bold text-4xl m-4 mb-7">Contáctenos</h1>
                    <div class="flex">
                        <div class="flex flex-col m-4 w-1/2">
                            <label for="name">Nombre completo</label>
                            <input type="text" name="name" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                        </div>
                        <div class="flex flex-col m-4 w-1/2">
                            <label for="email">Correo</label>
                            <input type="email" name="email" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col m-4">
                            <label for="affair">Asunto</label>
                            <input type="text" name="affair" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                        </div>
                        <div class="flex flex-col m-4">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="h-44 resize-none border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white"></textarea>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="bg-green-600 rounded-lg  p-2 text-white m-4 w-1/4">Enviar</button>
                    </div>
                </div>
            </form>

            <div class="p-4 m-auto h-full w-1/4 flex flex-col bg-[#EEEFF1] justify-between">
                <div>
                    <div class="h-16 w-32 flex justify-between items-center">
                        <a href="https://web.facebook.com/" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-square-facebook fa-xl text-gray-600 bg-opacity-70 hover:text-blue-800"></i></a>
                        <a href="https://co.linkedin.com" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-linkedin fa-xl text-gray-600 hover:text-cyan-600"></i></a>
                        <a href="https://twitter.com/" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-square-x-twitter fa-xl text-gray-600 hover:text-black"></i></a>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-[#ff8239]">SISGESST</h1>
                        <p class="h-16 text-lg">proteger la vida y el bienestar de los trabajadores es una cultura de todas las organizaciones

                        </p>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold text-[#ff8239]">COMPAÑÍA</h1>
                    <div class="flex flex-col h-16">
                        <a href="{{ route('help') }}" class="hover:text-[#ff8239] text-lg">Acerca de nosotros</a>
                        <a href="{{ route('contact') }}" class="hover:text-[#ff8239] text-lg">Contáctanos</a>
                    </div>
                </div>
                <div>
                    <h2 class="font-semibold text-[#ff8239]">CONTACTO DIRECTO</h2>
                    <div class="flex flex-col h-16">
                        <P class="text-lg">Correo: support@gmail.com</P>
                        <p class="text-lg">314 4334726</p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
