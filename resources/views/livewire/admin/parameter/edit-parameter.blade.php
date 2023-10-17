<div>
    <button wire:click="$set('openParameter', true)"
        class="absolute top-2 right-10 bg-blue-500 rounded-lg px-4">Editar</button>
    <x-dialog-modal wire:model="openParameter">
        <x-slot name="content">

            <button wire:click="$set('openParameter', false)"
                class="absolute top-2 right-10 bg-blue-500 rounded-lg px-4">Cerrar</button>

        </x-slot>
    </x-dialog-modal>
</div>
