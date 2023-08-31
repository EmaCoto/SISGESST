<div id="contentEval" class="bg-gray-200 p-4 overflow-y-scroll rounded-lg grid grid-cols-2 gap-10">
    <!-- component -->
    <div>
        <h1>{{ $processId }}</h1>
        <h1 class="bg-green-600 p-1 mt-2 mb-4 font-semibold text-2xl rounded-lg w-2/4 mx-auto text-center text-gray-100">
            Procesos</h1>
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
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <button wire:click="$emit('showActivity', {{ $process->id }})"
                                    class="w-4 mr-2 text-green-600 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button class="w-4 mr-2 transform text-blue-600 hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="w-4 mr-2 transform text-red-600 hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class="bg-green-600 text-gray-100 py-1 px-3 rounded-full text-md">Evaluar</span>
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
            {{ $processes->links() }}
        </div>
    </div>
    {{-- <div>
        <div class="m-2 space-y-2">
            <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="1">
                <div class="flex cursor-pointer items-center justify-between">
                    <span> HTML </span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                        class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                </div>
                <div
                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                    <div>
                        <livewire:processes.activities.show-activity>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2 space-y-2">
            <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="1">
                <div class="flex cursor-pointer items-center justify-between">
                    <span> HTML </span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                        class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                </div>
                <div
                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                    <div>
                        <livewire:processes.activities.show-activity>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2 space-y-2">
            <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="1">
                <div class="flex cursor-pointer items-center justify-between">
                    <span> HTML </span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                        class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                </div>
                <div
                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                    <div>
                        <livewire:processes.activities.show-activity>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2 space-y-2">
            <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="1">
                <div class="flex cursor-pointer items-center justify-between">
                    <span> HTML </span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                        class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                </div>
                <div
                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                    <div>
                        <livewire:processes.activities.show-activity>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2 space-y-2">
            <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="1">
                <div class="flex cursor-pointer items-center justify-between">
                    <span> HTML </span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                        class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                </div>
                <div
                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                    <div>
                        <livewire:processes.activities.show-activity>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2 space-y-2">
            <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="1">
                <div class="flex cursor-pointer items-center justify-between">
                    <span> HTML </span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                        class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                </div>
                <div
                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                    <div>
                        <livewire:processes.activities.show-activity>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2 space-y-2">
            <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="1">
                <div class="flex cursor-pointer items-center justify-between">
                    <span> HTML </span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                        class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                </div>
                <div
                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                    <div>
                        <livewire:processes.activities.show-activity>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}



</div>
