<div id="contentEval" class="bg-gray-200 p-4 h-full rounded-lg overflow-hidden">
    <!-- component -->
    <h1 class="bg-green-600 p-1 mt-2 mb-4 font-semibold text-2xl rounded-lg w-full mx-auto text-center text-gray-100">
        Actividades - {{$processName}}
    </h1>
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
            @forelse ($activities as $activity)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-center">
                            <span class="font-medium">{{$activity->id}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-center">
                            <span>{{$activity->name}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-justify">
                        <div class="flex items-center justify-center">
                            <span>{{$activity->description}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <div class="flex group relative">
                                <span class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-4 opacity-0 absolute bg-blue-600 rounded-lg px-2">Editar</span>
                                <button class="w-4 mr-2 transform text-blue-600 hover:text-gray-400 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex group relative">
                                <span class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-6 opacity-0 absolute bg-red-600 rounded-lg px-2">Eliminar</span>
                                <button class="w-4 mr-2 transform text-red-600 hover:text-gray-400 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        @livewire('processes.tasks.show-task', ['activityId' => $activity->id, 'activityName' => $activity->name], key(time() . $activity->id))
                    </td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-center text-3xl p-5">
                        <span>No hay informacion</span>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            @endforelse

        </tbody>
    </table>
    <div class="px-6">
        {{ $activities->links() }}
    </div>
</div>
