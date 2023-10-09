<x-app-layout>
    <div class="flex flex-col">
        <main class="flex-grow flex">
            <x-aside-admin />

            <div id="contentEval" class="relative px-4 py-2 w-[85vw] h-[93.3vh] overflow-y-scroll bg-gray-200 ">
                <div class="grid grid-cols-4 my-8 mx-auto">
                    <a href="#" class="w-80 h-52 rounded-lg shadow-lg mx-auto bg-green-700 cursor-pointer text-3xl">
                        <div class="w-full h-full bg-white border-dashed border-2 border-green-500 hover:rotate-6 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-regular fa-id-card fa-xl"></i>
                            <h1 class="font-semibold pt-10">Evaluadores</h1>
                        </div>
                    </a>
                    <a href="{{ route('users') }}" class="w-80 h-52 rounded-lg shadow-lg mx-auto bg-yellow-400 cursor-pointer text-3xl">
                        <div class="w-full h-full bg-white border-dashed border-2 border-yellow-400 hover:rotate-6 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-users fa-xl"></i>
                            <h1 class="font-semibold pt-10">Usuarios</h1>
                        </div>
                    </a>
                    <a href="#" class="w-80 h-52 rounded-lg shadow-lg mx-auto bg-green-700 cursor-pointer text-3xl">
                        <div class="w-full h-full bg-white border-dashed border-2 border-green-500 hover:rotate-6 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-user-group fa-xl"></i>
                            <h1 class="font-semibold pt-10">USUARIOS</h1>
                        </div>
                    </a>
                    <a href="#" class="w-80 h-52 rounded-lg shadow-lg mx-auto bg-green-700 cursor-pointer text-3xl">
                        <div class="w-full h-full bg-white border-dashed border-2 border-green-500 hover:rotate-6 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-user-group fa-xl"></i>
                            <h1 class="font-semibold pt-10">USUARIOS</h1>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>


