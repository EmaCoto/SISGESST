<div>
    <button wire:click="$set('openDetail', true)"
        class="w-4 mr-2 text-green-600 transform hover:text-gray-400 hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
    </button>

    <x-dialog-modal wire:model="openDetail" maxWidth="4xl">

        <x-slot name="content">
            <div class="border-2 border-gray-500 mb-8">
                <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
                    PROCESO
                </div>
                <div class="text-center w-full grid grid-cols-2">
                    <div class="w-full bg-gray-300 border-r-2 p-2 border-b-2 border-gray-500">
                        Nombre
                    </div>
                    <div class="w-full bg-gray-300 border-b-2 p-2 border-gray-500">
                        Descripcion
                    </div>
                </div>
                <div class="text-center w-full grid grid-cols-2">
                    <div class="w-full border-r-2 border-gray-500 text-left p-2">
                        {{ $evaluations->task->activity->process->name }}

                    </div>
                    <div class="w-full text-left p-2">
                        {{ $evaluations->task->activity->process->description }}
                    </div>
                </div>
            </div>

            <div class="border-2 border-gray-500 mb-8">
                <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
                    ACTIVIDAD
                </div>
                <div class="text-center w-full grid grid-cols-2">
                    <div class="w-full bg-gray-300 border-r-2 p-2 border-b-2 border-gray-500">
                        Nombre
                    </div>
                    <div class="w-full bg-gray-300 border-b-2 p-2 border-gray-500">
                        Descripcion
                    </div>
                </div>
                <div class="text-center w-full grid grid-cols-2">
                    <div class="w-full border-r-2 border-gray-500 text-left p-2">
                        {{ $evaluations->task->activity->name }}

                    </div>
                    <div class="w-full text-left p-2">
                        {{ $evaluations->task->activity->description }}
                    </div>
                </div>
            </div>

            <div class="border-2 border-gray-500 mb-8">
                <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
                    TAREA
                </div>
                <div class="text-center w-full grid grid-cols-2">
                    <div class="w-full bg-gray-300 border-r-2 p-2 border-b-2 border-gray-500">
                        Nombre
                    </div>
                    <div class="w-full bg-gray-300 border-b-2 p-2 border-gray-500">
                        Descripcion
                    </div>
                </div>
                <div class="text-center w-full grid grid-cols-2">
                    <div class="w-full border-r-2 border-gray-500 text-left p-2">
                        {{ $evaluations->task->name }}

                    </div>
                    <div class="w-full text-left p-2">
                        {{ $evaluations->task->description }}
                    </div>
                </div>
            </div>

            <div class="border-2 border-gray-500 mb-8">
                <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
                    CLASIFICACION DE PELIGRO
                </div>
                <div class="text-center w-full grid grid-cols-2">
                    <div class="w-full bg-gray-300 border-r-2 p-2 border-b-2 border-gray-500">
                        Nombre
                    </div>
                    <div class="w-full bg-gray-300 border-b-2 p-2 border-gray-500">
                        Descripcion
                    </div>
                </div>
                <div class="text-center w-full grid grid-cols-2">
                    <div class="w-full border-r-2 border-gray-500 text-left p-2">
                        {{ $evaluations->danger_classification }}

                    </div>
                    <div class="w-full text-left p-2">
                        {{ $dangerDescription->danger_description}}
                    </div>
                </div>
            </div>
            <div class="border-2 border-gray-500 mb-8">
                <div class="text-center w-full grid grid-cols-3">
                    <div class="col-span-1 w-full bg-gray-500 p-2 border-b-2 border-gray-300 text-gray-100">
                        PELIGRO
                    </div>
                    <div class="col-span-2 text-left w-full border-b-2 border-l-2 p-2 border-gray-500">
                        {{$evaluations->danger}}
                    </div>
                </div>
                <div class="text-center w-full grid grid-cols-3">
                    <div class="col-span-1 w-full bg-gray-500 border-gray-500 text-center p-2 text-gray-100">
                        EFECTOS POSIBLES
                    </div>
                    <div class="col-span-2 w-full text-left p-2 border-l-2 border-gray-500">
                        {{ $evaluations->possible_effects}}
                    </div>
                </div>
            </div>
            <button wire:click="$set('openDetail', false)">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
