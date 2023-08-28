<div>
    <div class=" w-[95%] 2xl:w-11/12 mx-auto mt-4 flex h-auto gap-4">
        <div class="my-auto">
            <button type="button"
                class="text-gray-100 font-bold text-md bg-cyan-500 flex items-center w-full p-2 transition duration-75 rounded-lg group"
                aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">

                <svg class="w-3 h-3 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
                <span class="flex-1 mx-3 text-left whitespace-nowrap">Gestionar Empresa</span>

            </button>
            <ul id="dropdown-example" class="hidden py-1">
                <div class="bg-cyan-300 rounded-lg">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 hover:bg-gray-100">Modificar</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 hover:bg-gray-100">Desactivar</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 hover:bg-gray-100">Eliminar</a>
                    </li>
                </div>
            </ul>
        </div>
        <div
            class="bg-gray-300 w-3/4 rounded-lg py-2 pr-10 flex pl-5 items-center gap-8 font-semibold text-lg text-gray-600">
            <div>
                <h1>{{ $company->name }}</h1>
            </div>
            <div>
                <h1>Nit: {{ $company->nit }}</h1>
            </div>
        </div>
        <div class="w-2/5 flex justify-center gap-4 text-gray-100 font-semibold text-md">
            <button class="bg-green-600 rounded-lg px-4">crear proceso</button>
            <button class="bg-green-600 rounded-lg px-4">crear actividad</button>
            <button class="bg-green-600 rounded-lg px-4">crear tarea</button>
        </div>
    </div>

    <div class="w-11/12 mt-12 mx-auto h-[80vh] grid grid-cols-2 gap-10">
        <div class="bg-gray-200 p-4 rounded-lg">
            <!-- component -->
            <h1 class="bg-green-600 p-1 mt-2 mb-4 font-semibold text-2xl rounded-lg w-2/4 mx-auto text-center text-gray-100">Procesos</h1>
                <table class="w-full table-auto rounded-lg overflow-hidden">
                    <thead class="rounded-t-lg">
                        <tr class="bg-green-600 text-gray-100 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">N°</th>
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-center">Descripción</th>
                            <th class="py-3 px-6 text-center">Acciones</th>
                            <th class="py-3 px-6 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">1</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>Eshal Rosas</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>Eshal Rosas, Eshal Rosas wire:, Eshal Rosas, Eshal Rosas, Eshal Rosas</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 text-green-600 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform text-blue-600 hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform text-red-600 hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-green-600 text-gray-100 py-1 px-3 rounded-full text-md">Evaluar</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">2</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>Eshal Rosas</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>Eshal Rosas, Eshal Rosas wire:, Eshal Rosas, Eshal Rosas, Eshal Rosas</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform text-green-600 hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform text-blue-600 hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform text-red-600 hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-green-600 text-gray-100 py-1 px-3 rounded-full text-md">Evaluar</span>
                            </td>
                        </tr>
                    </tbody>
                </table>

        </div>
        <div class="bg-gray-200 p-4 rounded-lg">
            <!-- component -->
            <h1 class="bg-green-600 p-1 mt-2 mb-4 font-semibold text-2xl rounded-lg w-4/5 mx-auto text-center text-gray-100">Actividades - </h1>
            <table class="w-full table-auto rounded-lg overflow-hidden">
                <thead class="rounded-t-lg">
                    <tr class="bg-green-600 text-gray-100 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">N°</th>
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="py-3 px-6 text-center">Descripción</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                        <th class="py-3 px-6 text-center">Tareas</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <span class="font-medium">1</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <span>Eshal Rosas</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span>Eshal Rosas, Eshal Rosas wire:, Eshal Rosas, Eshal Rosas, Eshal Rosas</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform text-blue-600 hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform text-red-600 hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <livewire:processes.show-task>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="font-medium">2</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <span>Eshal Rosas</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span>Eshal Rosas, Eshal Rosas wire:, Eshal Rosas, Eshal Rosas, Eshal Rosas</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform text-blue-600 hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform text-red-600 hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">

                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    {{-- <h1 class="bg-green-600 p-1 mb-2 font-semibold text-lg rounded-lg w-5/6 mx-auto text-left text-gray-100">{{$company->name}}</h1>
        <div class="mx-3">
            <h1>Nit: {{$company->nit}}</h1>
            <h1>{{$company->email}}</h1>
            <h1>Ciudad: {{$company->city->name}}</h1>
            <h1>Direct-workers: {{$company->number_direct_workers}} </h1>
            <h1>Indirect-workers:{{$company->number_direct_workers}}</h1>
        </div> --}}
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>
