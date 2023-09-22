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
        <div class="flex w-4/5 mx-auto my-6 min-h-screen">
            <div class="flex-col">
                {{--------------------------- SECTION ACERCA DEL SISTEMA ----------------------------}}
                <div id="about" class="mb-24">
                    <h1 class="text-center font-bold text-4xl m-4">Acerca del sistema</h1>
                    <div class="rounded-lg overflow-hidden">
                        <div class="grid grid-cols-2 mx-auto">
                            <div class="p-4 flex">
                              <hr class="h-full w-5 rounded-lg mr-4 bg-[#ff8239]">
                              <div>
                                <h1 class="text-3xl">Misión</h1>
                                <p class="text-justify">Contribuir a un entorno laboral seguro y saludable mediante la implementación efectiva de nuestro sistema de gestión en seguridad y salud en el trabajo (SST), proporcionando herramientas innovadoras y recursos para la identificación, evaluación y mitigación de riesgos laborales, en cumplimiento con los estándares de la resolución 0312 de 2019. Nuestra misión es proteger la vida y el bienestar de los trabajadores y fomentar una cultura de seguridad en todas las organizaciones</p>
                              </div>
                            </div>

                            <div class="p-4 flex ">
                              <hr class="h-full w-5 rounded-lg mr-4 bg-[#ff8239]">
                              <div>
                                <h1 class="text-3xl">Visión</h1>
                                <p class="text-justify">Ser líderes reconocidos en la mejora continua de la seguridad y la salud en el trabajo, impulsando la innovación y la excelencia en la gestión de riesgos laborales. Nuestra visión es que cada trabajador pueda regresar a casa sano y salvo todos los días, y que cada organización pueda cumplir y superar los estándares más exigentes en SST, contribuyendo así a un mundo laboral más seguro y saludable.</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--------------------------- SECTION GUÍA DE USO ----------------------------}}
                <div id="guide" class="mb-24">
                    <h1 class="text-center font-bold text-4xl m-4">Guía de uso</h1>
                    <div class="border rounded-lg overflow-hidden">
                        <div class="flex h-36 bg-gray-200 group hover:h-72 ease-in-out overflow-hidden duration-700">
                            <img src="{{ asset('img/table.jpg') }}" alt="" class="w-1/3 transition">
                            <div class="p-5 ease-in-out duration-700">
                                <h1 class="text-xl font-semibold">Lorem ipsum dolor sit amet.</h1>
                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nostrum omnis magnam beatae voluptatum minima nemo ullam! Provident nostrum id, in tenetur quae commodi fuga maiores quos illo, nesciunt temporibus!</p>
                                <p class="opacity-0 group-hover:opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi laboriosam asperiores iure quas numquam accusamus, fuga tenetur nostrum. Blanditiis, non porro laborum doloremque ab iste recusandae provident nulla maxime excepturi! <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quidem culpa deserunt voluptatum suscipit dolores vel iusto, nulla voluptatem nesciunt architecto consectetur. Tenetur dolorem tempora, error aliquam animi enim quam.</p>
                            </div>
                        </div>
                        <div class="flex h-36 group hover:h-72 ease-in-out overflow-hidden duration-700">
                            <div class="p-5 ease-in-out duration-700">
                                <h1 class="text-xl font-semibold">Lorem ipsum dolor sit amet.</h1>
                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nostrum omnis magnam beatae voluptatum minima nemo ullam! Provident nostrum id, in tenetur quae commodi fuga maiores quos illo, nesciunt temporibus!</p>
                                <p class="opacity-0 group-hover:opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi laboriosam asperiores iure quas numquam accusamus, fuga tenetur nostrum. Blanditiis, non porro laborum doloremque ab iste recusandae provident nulla maxime excepturi! <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quidem culpa deserunt voluptatum suscipit dolores vel iusto, nulla voluptatem nesciunt architecto consectetur. Tenetur dolorem tempora, error aliquam animi enim quam.</p>
                            </div>
                            <img src="{{ asset('img/like.jpg') }}" alt="" class="w-1/3 transition">
                        </div>
                        <div class="flex h-36 bg-gray-200 group hover:h-72 overflow-hidden ease-in-out duration-700">
                            <img src="{{ asset('img/table.jpg') }}" alt="" class="w-1/3 transition">
                            <div class="p-5 ease-in-out duration-700">
                                <h1 class="text-xl font-semibold">Lorem ipsum dolor sit amet.</h1>
                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nostrum omnis magnam beatae voluptatum minima nemo ullam! Provident nostrum id, in tenetur quae commodi fuga maiores quos illo, nesciunt temporibus!</p>
                                <p class="opacity-0 group-hover:opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi laboriosam asperiores iure quas numquam accusamus, fuga tenetur nostrum. Blanditiis, non porro laborum doloremque ab iste recusandae provident nulla maxime excepturi! <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quidem culpa deserunt voluptatum suscipit dolores vel iusto, nulla voluptatem nesciunt architecto consectetur. Tenetur dolorem tempora, error aliquam animi enim quam.</p>
                            </div>
                        </div>
                        <div class="flex h-36 group hover:h-72 overflow-hidden ease-in-out duration-700">
                            <div class="p-5 ease-in-out duration-700">
                                <h1 class="text-xl font-semibold">Lorem ipsum dolor sit amet.</h1>
                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nostrum omnis magnam beatae voluptatum minima nemo ullam! Provident nostrum id, in tenetur quae commodi fuga maiores quos illo, nesciunt temporibus!</p>
                                <p class="opacity-0 group-hover:opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi laboriosam asperiores iure quas numquam accusamus, fuga tenetur nostrum. Blanditiis, non porro laborum doloremque ab iste recusandae provident nulla maxime excepturi! <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quidem culpa deserunt voluptatum suscipit dolores vel iusto, nulla voluptatem nesciunt architecto consectetur. Tenetur dolorem tempora, error aliquam animi enim quam.</p>
                            </div>
                            <img src="{{ asset('img/comosaber.jpg') }}" alt="" class="w-1/3 transition">
                        </div>
                    </div>
                </div>
            </div>


            {{--------------------- ASIDE -------------------------}}
            <div class="hidden pt-4 mt-5 lg:block ml-10">
                <aside class="sticky w-64 top-32">
                    <h1 class="font-semibold">Elementos</h1>
                    <nav class="flex flex-col">
                        <div class="flex group ">
                            <svg class="w-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path class="group-hover:text-orange-600" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            <a href="#about" class="ml-2 group-hover:text-orange-600">Acerca del sistema</a>
                        </div>
                        <div class="flex group">
                            <svg class="w-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path class="group-hover:text-orange-600" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            <a href="#guide" class="ml-2 group-hover:text-orange-600">Guía de uso</a>
                        </div>
                        <div class="flex group">
                            <svg class="w-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path class="group-hover:text-orange-600" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            <a href="#" class="ml-2 group-hover:text-orange-600">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="flex group">
                            <svg class="w-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path class="group-hover:text-orange-600" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            <a href="#" class="ml-2 group-hover:text-orange-600">Lorem ipsum dolor sit amet.</a>
                        </div>
                    </nav>
                </aside>
            </div>
        </div>

        </main>

        <footer class="z-50">
            <div class="grid grid-cols-4 px-28 bg-[#cbcbcd] text-center text-black py-2 h-32">
                <div class="flex items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-16">
                    <p class="text-[#ff8239] px-3 text-3xl font-extrabold">SISGESST</p>
                </div>
                <div>
                    <h1 class="font-semibold m-2">LEGAL</h1>
                    <div class="flex flex-col justify-center h-16 items-center">
                        <a href="#" class="hover:text-[#FE5E00]">Términos</a>
                        <a href="#" class="hover:text-[#FE5E00]">Privacidad</a>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold m-2">COMPAÑÍA</h1>
                    <div class="flex flex-col justify-center h-16 items-center">
                        <a href="#" class="hover:text-[#FE5E00]">Blog oficial</a>
                        <a href="#" class="hover:text-[#FE5E00]">Acerca de nosotros</a>
                        <a href="#" class="hover:text-[#FE5E00]">Contáctanos</a>
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
