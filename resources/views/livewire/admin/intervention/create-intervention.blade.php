<div>
    <button wire:click="$set('openCreateIntervention', true)"
        class="px-6 py-2 bg-green-600 rounded-lg text-md text-gray-100">Agregar</button>
    <x-dialog-modal wire:model="openCreateIntervention" maxWidth="xl">
        <x-slot name="content">
            <div class="bg-green-600 p-1 font-semibold text-xl rounded-lg w-10/12 mx-auto text-center text-gray-100">
                Crear {{ $intervention }}
            </div>

            <x-label>Medida intervencion:</x-label>
            <textarea wire:model="interventionDescription"
                class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-24"></textarea>
            <x-input-error for="interventionDescription" />


            <button wire:click="$set('openCreateIntervention', false)"
                class="px-6 py-2 bg-gray-600 rounded-lg text-md text-gray-100 mt-10">Cerrar</button>
            <button wire:click="createDanger"
                class="px-6 py-2 bg-green-600 rounded-lg text-md text-gray-100 mt-10">Agregar</button>
        </x-slot>
    </x-dialog-modal>
</div>
