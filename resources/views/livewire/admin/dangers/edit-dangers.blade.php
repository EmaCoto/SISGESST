<div>
    <button wire:click="$set('openDanger', true)"
        class="absolute top-2 right-10 bg-blue-500 rounded-lg px-4">Editar</button>

    <x-dialog-modal wire:model="openDanger" maxWidth="5xl">
        <x-slot name="content">
            <div class="bg-green-600 p-1 mb-2 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">
                Editar peligros {{ $danger }}</div>
            <div id="contentEval" class="w-full h-[74vh] overflow-y-scroll pr-4">
                @foreach ($dangerDescription as $index => $name)
                    <div>
                        <x-label>Peligro</x-label>
                        <x-input wire:model="dangerDescription.{{ $index }}" />
                        <x-input-error for="dangerDescription.{{ $index }}"/>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-between px-10">
                <button wire:click="$set('openDanger', false)"
                    class="mt-10 py-2 px-6 bg-gray-500 rounded-lg text-lg text-gray-100">Cerrar</button>
                <button wire:click="saveDanger"
                    class="mt-10 py-2 px-6 bg-green-600 rounded-lg text-lg text-gray-100">Guardar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
