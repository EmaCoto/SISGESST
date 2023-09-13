<div>
    <div class="hidden lg:grid grid-cols-2 gap-4 w-11/12 h-[83vh] mx-auto mt-6 p-2">
        <!-- component -->
        <div id="contentEval" class="bg-gray-200 p-4 rounded-lg h-full overflow-hidden">
            <h1 class="bg-green-600 p-1 mt-2 mb-4 font-semibold text-2xl rounded-lg w-2/4 mx-auto text-center text-gray-100">
                Procesos
            </h1>
            @if ($processes->count() > 0)
                <table class="table-auto rounded-lg overflow-hidden">
                    <thead class="rounded-t-lg">
                        <tr class=" bg-green-600 text-gray-100 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">N°</th>
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-center">Descripción</th>
                            <th class="py-3 px-6 text-center">Acciones</th>
                            <th class="py-3 px-6 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-600 text-sm font-light">
                        @forelse ($processes as $process)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $process->id }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $process->name }} </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-justify">
                                    <div class="flex items-center justify-center">
                                        <span>{{ $process->description }}</span>
                                    </div>
                                </td>
                                <td class="py-3 text-center">
                                    <div class="flex item-center justify-center align-middle">
                                        <div class="flex group relative">
                                            <span
                                                class="w-32 py-1 text-gray-100 group-hover:opacity-100 -top-8 -left-14 opacity-0 absolute bg-green-600 rounded-lg px-2">Ver
                                                Actividades</span>
                                            <div>
                                                <button
                                                    wire:click="processId('{{ $process->id }}', '{{ $process->name }}', '{{ $companyId }}')"
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
                                            @livewire('processes.edit-process', ['process' => $process], key(time() . $process->id))
                                        </div>
                                        <div class="flex group relative">
                                            <span
                                                class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-6 opacity-0 absolute bg-red-600 rounded-lg px-2">
                                                Eliminar
                                            </span>
                                            <div>
                                                <button wire:click="confirmDelete({{ $process->id }})"
                                                    class="w-4 mr-2 transform text-red-600 hover:text-gray-400 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        @if ($openDelete)
                                            <div class="fixed z-50 inset-0 flex items-center justify-center">
                                                <div wire:click="$set('openDelete', true)" class="absolute inset-0 z-40 bg-black opacity-10 modal-overlay"></div>

                                                <div
                                                    class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-red-500 rounded-xl modal-container md:max-w-md">
                                                    <!-- Content of the modal -->
                                                    <div class="flex gap-3 py-2 bg-red-500 border border-red-500">
                                                        <h3 class="w-full text-2xl text-center text-gray-100 ">Eliminar</h3>
                                                    </div>
                                                    <div class="px-6 py-4 text-left modal-content">

                                                        <p class="text-xl text-gray-500">
                                                            ¿Estás seguro de que deseas eliminar este proceso?
                                                        </p>
                                                        <div class="mt-4 text-center">
                                                            <x-secondary-button wire:click="$set('openDelete', false)"
                                                                class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                                                                Cancelar
                                                            </x-secondary-button>
                                                            <x-secondary-button wire:click="deleteConfirmed"
                                                                class="mr-4 text-red-500 border border-red-500 shadow-lg hover:shadow-red-400">
                                                                Eliminar
                                                            </x-secondary-button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-green-600 text-gray-100 py-1 px-3 rounded-full text-md">Evaluar</span>
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
            @else
                <div class="bg-white rounded-lg p-10 w-5/6 mx-auto">
                    <h1 class="text-3xl text-center dark:text-gray-600 font-semibold">No hay procesos disponibles</h1>
                </div>
            @endif

            <div class="px-6">
                {{ $processes->links() }}
            </div>
        </div>

        <div>
            @livewire('processes.activities.show-activity', key(time() . $processes['id']))
        </div>
    </div>

    <div class="lg:hidden grid md:grid-cols-2 gap-3 w-11/12 mx-auto mt-6 p-2">
        @forelse ($processes as $process)
            <div class="m-2">
                <div class="group flex flex-col gap-2 rounded-lg bg-green-600 p-2 text-white" tabindex="1">
                    <div class="flex cursor-pointer items-center justify-between">
                        <span>{{ $process->id }} || {{ $process->name }}</span>
                        <div>
                            <span class="bg-green-600 text-gray-100 py-1 px-3 rounded-full text-md">Evaluar</span>
                            {{-- @if (in_array($process->id, $openProcesses))
                                <button wire:click="toggleProcess({{ $process->id }})">Cerrar</button>
                            @else
                                <button wire:click="toggleProcess({{ $process->id }})">Abrir</button>
                            @endif --}}
                        </div>
                    </div>
                    {{-- @if (in_array($process->id, $openProcesses)) --}}
                        {{-- <div
                            class="bg-gray-100 text-gray-700 p-3 rounded-lg h-auto items-center transition-all max-h-screen">
                            <div>
                                @livewire('processes.activities.show-activity', ['processId' => $process->id], key(time() . $process->id))
                            </div>
                        </div> --}}
                    {{-- @else --}}
                        <div
                            class="bg-gray-100 text-gray-700 p-3 rounded-lg h-auto items-center transition-all max-h-screen">
                            <div>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. At deserunt dignissimos dolores,
                                illum hic quas iusto pariatur temporibus fugiat commodi similique harum beatae nisi,
                                doloremque neque quo qui praesentium nesciunt?
                            </div>
                        </div>
                    {{-- @endif --}}
                </div>
            </div>
        @empty
            <span>No hay información</span>
        @endforelse
    </div>
</div>

