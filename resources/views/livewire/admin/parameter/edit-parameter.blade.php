<div>
    <button wire:click="$set('openParameter', true)"
        class="absolute top-2 right-10 bg-blue-500 rounded-lg px-4">Editar</button>
    <x-dialog-modal wire:model="openParameter" maxWidth="5xl">
        <x-slot name="content">
            <div class="flex">
                <div class="bg-green-600 p-1 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">
                    Editar {{ $parameter }}
                </div>
                @livewire('admin.parameter.create-parameter')
            </div>
            <div id="contentEval" class="w-full h-[74vh] overflow-y-scroll pr-4">
                @foreach ($this->parameterName as $index => $name)
                    <div class="bg-gray-400 mt-6 px-4 rounded-lg">
                        <div class="grid grid-cols-12 gap-6 items-center">
                            <div class="col-span-2">
                                <x-input type="text" wire:model="parameterId.{{ $index }}" hidden/>
                                <x-label>Nombre</x-label>
                                <x-input type="text" wire:model="parameterName.{{ $index }}" />
                                <x-input-error for="parameterName.{{ $index }}"/>
                            </div>
                            @if ($parameter != "risk" && $parameter != "acceptability")
                                <div class="col-span-2">
                                    <x-label>Prefijo</x-label>
                                    <x-input type="text" wire:model="parameterPrefix.{{ $index }}" />
                                    <x-input-error for="parameterPrefix.{{ $index }}"/>
                                </div>
                            @endif
                            @if ($parameter != "acceptability")
                                <div class="col-span-2">
                                    <x-label>Valor</x-label>
                                    <x-input type="text" wire:model="parameterValue.{{ $index }}" />
                                    <x-input-error for="parameterValue.{{ $index }}"/>
                                </div>
                            @endif
                            <div class="col-span-6">
                                <x-label>Significado</x-label>
                                <textarea wire:model="parameterMeaning.{{ $index }}"
                                    class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-28"></textarea>
                                <x-input-error for="parameterMeaning.{{ $index }}"/>
                            </div>
                        </div>
                        <div>
                            <button wire:click="saveParameter"
                            class="mt-4 mb-2 py-2 px-6 bg-red-600 rounded-lg text-md text-gray-100">eliminar</button>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-between px-10">
                <button wire:click="$set('openParameter', false)"
                    class="mt-10 py-2 px-6 bg-gray-500 rounded-lg text-md text-gray-100">Cerrar</button>
                <button wire:click="saveParameter"
                    class="mt-10 py-2 px-6 bg-blue-600 rounded-lg text-md text-gray-100">Guardar cambios</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
