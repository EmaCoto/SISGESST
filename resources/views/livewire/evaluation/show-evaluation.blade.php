<div>
    <x-navbar-company :company="$companies" />

    <div class="w-full overflow-hidden pb-7" style="height: 84vh">
        <x-content-block>
            <h1 class="bg-teal-600 p-1 mb-6 font-semibold text-2xl rounded-lg w-4/5 mx-auto text-center text-gray-100">
                Procesos evaluados
            </h1>

            {{-- @if ($processes->count() > 0) --}}
            <table class="w-full rounded-lg overflow-hidden">
                <thead class="rounded-t-lg">
                    <tr class=" bg-teal-600 text-center text-gray-100 uppercase text-sm leading-normal">
                        <th class="py-3 px-6">N°</th>
                        <th class="py-3 px-6">Tarea</th>
                        <th class="py-3 px-6">Descripción</th>
                        <th class="py-3 px-6">Actividad</th>
                        <th class="py-3 px-6">Proceso</th>
                        <th class="py-3 px-6">Evaluador</th>
                        <th class="py-3 px-6">Fecha Evaluacion</th>
                        <th class="py-3 px-6"></th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-600 text-sm font-light">
                    @forelse ($evaluations as $key => $evaluation)
                        <tr class="text-left">
                            <td class="py-4 px-6">{{ $key + 1 }}</td>
                            <td class="py-4 px-6">{{ $evaluation->task->name }}</td>
                            <td class="py-4 px-6">{{ $evaluation->task->description }}</td>
                            <td class="py-4 px-6">{{ $evaluation->task->activity->name }}</td>
                            <td class="py-4 px-6">{{ $evaluation->task->activity->process->name }}</td>
                            <td class="py-4 px-6">{{ $userName }}</td>
                            <td class="py-4 px-6">{{ $evaluation->created_at }}</td>
                            <td class="py-3 text-center">
                                <div class="flex item-center justify-center align-middle">
                                    <div class="flex group relative">
                                        <span
                                            class="w-32 py-1 text-gray-100 group-hover:opacity-100 -top-8 -left-14 opacity-0 absolute bg-green-600 rounded-lg px-2">Ver
                                            Actividades</span>
                                        <div>
                                            <button
                                                class="w-4 mr-2 text-green-600 transform hover:text-gray-400 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex group relative">
                                        <span
                                            class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-4 opacity-0 absolute bg-blue-600 rounded-lg px-2">
                                            Editar
                                        </span>
                                        {{-- @livewire('processes.edit-process', ['process' => $process], key(time() . $process->id)) --}}
                                    </div>
                                    <div class="flex group relative">
                                        <span
                                            class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-6 opacity-0 absolute bg-red-600 rounded-lg px-2">
                                            Eliminar
                                        </span>
                                        <div>
                                            <button
                                                class="w-4 mr-2 transform text-red-600 hover:text-gray-400 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td class="text-center text-3xl p-5">
                                    <span>No hay informacion</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- @else
                <div class="bg-white rounded-lg p-10 w-5/6 mx-auto">
                    <h1 class="text-3xl text-center dark:text-gray-600 font-semibold">No hay procesos disponibles</h1>
                </div>
            @endif --}}

                {{-- <div class="px-6">
                {{ $processes->links() }}
            </div> --}}
            </x-content-block>
        </div>
        <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    </div>
