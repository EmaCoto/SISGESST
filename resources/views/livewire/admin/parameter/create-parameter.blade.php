<div>
    <button wire:click="$set('openCreateParameter', true)"
        class="px-6 py-2 bg-green-600 rounded-lg text-md text-gray-100">Agregar</button>
    <x-dialog-modal wire:model="openCreateParameter" maxWidth="xl">
        <x-slot name="content">
            <x-label>Nombre</x-label>
            <x-input type="text" wire:model="parameterName" />
            <x-input-error for="parameterName" />

            <x-label>Prefijo</x-label>
            <x-input type="text" wire:model="parameterPrefix}" />
            <x-input-error for="parameterPrefix" />

            <x-label>Valor</x-label>
            <x-input type="text" wire:model="parameterValue" />
            <x-input-error for="parameterValue" />

            <x-label>Significado</x-label>
            <textarea wire:model="parameterMeaning"
                class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-28"></textarea>
            <x-input-error for="parameterMeaning" />

            <button wire:click="$set('openCreateParameter', false)"
                class="px-6 py-2 bg-gray-600 rounded-lg text-md text-gray-100">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
