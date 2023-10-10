<x-app-layout>
    <div class="flex flex-col">
        <main class="flex-grow flex">
            <x-aside-admin />

            <div id="contentEval" class="relative px-4 py-2 w-[85vw] h-[93.3vh] overflow-y-scroll overflow-x-hidden bg-gray-200 ">
                <div class="grid grid-cols-4 my-8">
                    <a href="{{ route('register') }}" class="w-[349px] h-52 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-6 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-arrow-right-to-bracket fa-xl"></i>
                            <h1 class="font-semibold pt-10">Registrar</h1>
                        </div>
                    </a>
                    <a href="{{ route('evaluators') }}" class="w-[349px] h-52 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-6 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-regular fa-id-card fa-xl"></i>
                            <h1 class="font-semibold pt-10">Evaluadores</h1>
                        </div>
                    </a>
                    <a href="{{ route('administrators') }}" class="w-[349px] h-52 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-6 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-user-tie fa-xl"></i>
                            <h1 class="font-semibold pt-10">Administradores</h1>
                        </div>
                    </a>
                    <a href="{{ route('managers') }}" class="w-[349px] h-52 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-6 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-clipboard-list fa-xl mt-7"></i>
                            <h1 class="font-semibold pt-10">Gestores de empresas</h1>
                        </div>
                    </a>
                </div>

                <div class="grid grid-cols-3 mt-14">
                    <a href="{{ route('parameter') }}" class="w-11/12 h-96 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-xl">
                        <div class="w-full h-full  bg-white border-2 border-gray-500 overflow-hidden rounded-lg flex flex-col">
                            <div class="flex p-2 items-center justify-between border-b-2 border-gray-500">
                                <h1 class="font-semibold ">Criterios</h1>
                                <i class="fa-solid fa-list-check text-2xl"></i>
                            </div>
                            <div class="h-full bg-gray-50 p-2">
                                *IMAGENES*
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('dangers') }}" class="w-11/12 h-96 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-xl">
                        <div class="w-full h-full  bg-white border-2 border-gray-500 overflow-hidden rounded-lg flex flex-col">
                            <div class="flex p-2 items-center justify-between border-b-2 border-gray-500">
                                <h1 class="font-semibold ">Peligros</h1>
                                <i class="fa-solid fa-triangle-exclamation text-2xl"></i>
                            </div>
                            <div class="h-full bg-gray-50 p-2">
                                *IMAGENES*
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('intervention') }}" class="w-11/12 h-96 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-xl">
                        <div class="w-full h-full  bg-white border-2 border-gray-500 overflow-hidden rounded-lg flex flex-col">
                            <div class="flex p-2 items-center justify-between border-b-2 border-gray-500">
                                <h1 class="font-semibold ">Medidas de intervención</h1>
                                <i class="fa-solid fa-scale-balanced text-2xl"></i>
                            </div>
                            <div class="h-full bg-gray-50 p-2">
                                *IMAGENES*
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>


