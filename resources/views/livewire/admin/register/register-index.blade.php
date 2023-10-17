<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <div id="contentEval" class="relative px-4 py-2 lg:w-[85vw] lg:h-[93.9vh] w-[100vw] h-[100vh] overflow-y-scroll overflow-x-hidden bg-gray-200 ">
            <form wire:submit.prevent="registerUser" class="flex h-full items-center">
                <div class="2xl:w-1/2 md:w-4/5 md:m-auto md:rounded-lg bg-white md:shadow-lg">
                    <h1 class="text-center font-bold text-4xl m-4 mb-7">¿Quiéres registrar un usuario?</h1>
                    <p class="text-justify text-lg m-4">Cada nivel de usuario tiene sus funciones y herramientas únicas que se habilitarán automáticamente cuando el usuario se registre con el nivel correspondiente. Asegúrate de asignar el rol apropiado al registrar a un nuevo miembro.</p>
                    <hr class="w-full h-1 mx-auto my-4 bg-gray-200 border-0">
                    @if(session('success'))
                        <div class="text-green-500 text-center uppercase text-lg">
                            {{ session('success') }}
                        </div>
                    @endif


                    <div class="sm:flex">
                        <div class="flex flex-col m-4 sm:w-1/2">
                            <label>Nombre completo</label>
                            <input wire:model="name" type="text" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col m-4 sm:w-1/2">
                            <label>Correo</label>
                            <input wire:model="email" type="email" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="sm:flex">
                        <div class="flex flex-col m-4 sm:w-1/2">
                            <label>Contraseña</label>
                            <input wire:model="password" type="password" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col m-4 sm:w-1/2">
                            <label>Rol</label>
                            <select wire:model="selectedRole" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                                <option value="">Seleccionar Rol</option>
                                @foreach ($roles as $role)
                                    <option>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('selectedRole') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="bg-green-600 rounded-lg  p-2 text-white m-4 2xl:w-1/4 w-2/3 text-xl mt-20">Registrar Usuario</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>
