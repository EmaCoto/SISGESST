<div>
    <button wire:click="$set('openIntervention', true)"
        class="absolute top-2 right-10 bg-blue-500 rounded-lg px-4">Editar</button>

    <x-dialog-modal wire:model="openIntervention" maxWidth="5xl">
        <x-slot name="content">
            <div class="bg-green-600 p-1 mb-2 font-semibold text-xl rounded-lg w-5/6 mx-auto text-center text-gray-100">
                Editar Medida de intervencion: {{ $intervention }}</div>

            <div id="contentEval" class="w-full h-[74vh] overflow-y-scroll pr-4">
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($interventionDescription as $index => $name)
                        <div>
                            <x-label>Intervencion</x-label>
                            <textarea wire:model="interventionDescription.{{ $index }}"
                                class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-24"></textarea>
                            <x-input-error for="interventionDescription.{{ $index }}"/>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-between px-10">
                <button wire:click="$set('openIntervention', false)"
                    class="mt-10 py-2 px-6 bg-gray-500 rounded-lg text-lg text-gray-100">Cerrar</button>
                <button wire:click="saveIntervention"
                    class="mt-10 py-2 px-6 bg-green-600 rounded-lg text-lg text-gray-100">Guardar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
