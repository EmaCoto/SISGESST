<div>
    <button wire:click="$set('openParameter', true)"
        class="absolute top-2 right-10 bg-blue-500 rounded-lg px-4">Editar</button>
    <x-dialog-modal wire:model="openParameter" maxWidth="5xl">
        <x-slot name="content">
            <div class="bg-green-600 p-1 mb-2 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">
                Editar {{ $parameter }}</div>
            @foreach ($this->parameterName as $index => $name)
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-2">
                        <x-label>Nombre</x-label>
                        <x-input type="text" wire:model="parameterName.{{ $index }}" />
                    </div>
                    @if(!empty($parameterPrefix[$index]))
                    <div class="col-span-2">
                        <x-label>Prefijo</x-label>
                        <x-input type="text" wire:model="parameterPrefix.{{ $index }}" />
                    </div>
                    @endif
                    @if(!empty($parameterValue[$index]))
                    <div class="col-span-2">
                        <x-label>Valor</x-label>
                        <x-input type="text" wire:model="parameterValue.{{ $index }}" />
                    </div>
                    @endif
                    <div class="col-span-6">
                        <x-label>Significado</x-label>
                        <textarea wire:model="parameterMeaning.{{ $index }}"
                            class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-28"></textarea>
                    </div>
                </div>
            @endforeach

            <div class="flex justify-between px-10">
                <button wire:click="$set('openParameter', false)"
                    class="mt-10 py-2 px-6 bg-gray-500 rounded-lg text-lg text-gray-100">Cerrar</button>
                <button wire:click="saveParameter"
                    class="mt-10 py-2 px-6 bg-green-600 rounded-lg text-lg text-gray-100">Guardar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
