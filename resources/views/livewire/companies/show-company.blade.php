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
            <ul id="dropdown-example" class="hidden absolute w-44 py-1">
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
        @livewire('processes.show-process', ['companyId' => $company->id])
        <livewire:processes.activities.show-activity />
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
