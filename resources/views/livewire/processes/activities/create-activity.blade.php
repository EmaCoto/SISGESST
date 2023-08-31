<div>
    <button wire:click="$set('open', true)" class="bg-green-600 rounded-lg px-4 py-2">crear actividad</button>

    <x-dialog-modal wire:model="open">
        <x-slot name="content">
            <h1 class="bg-green-600 p-1 mb-2 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">Registar empresa</h1>
            <div class="w-4/5 mx-auto my-5">
                <x-label>Nit:</x-label>
                <x-input type="text" wire:model.defer="nit"/>

                <x-label>Nombre:</x-label>
                <x-input type="text" wire:model.defer="name"/>

                <x-label>Email:</x-label>
                <x-input type="email" wire:model.defer="email"/>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <x-label>Trabajadores directos:</x-label>
                        <x-input type="number" wire:model.defer="direct_workers"/>
                    </div>
                    <div>
                        <x-label>Trabajadores indirectos:</x-label>
                        <x-input type="number" wire:model.defer="indirect_workers"/>
                    </div>
                </div>

                <x-label>Elaborado por:</x-label>
                <x-input type="text" wire:model.defer="made_by"/>

                <x-label>Cargo:</x-label>
                <x-input type="text" wire:model.defer="position"/>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <x-label>Ciudad:</x-label>


                    </div>
                    <div>
                        <x-label>Sector economico:</x-label>
                        <x-input type="text" wire:model.defer="economic_sector"/>
                    </div>
                </div>
            </div>

            <div class="w-4/5 md:w-3/5 mx-auto flex justify-between mt-6 mb-1">
                <button wire:click="$set('open', false)" class="bg-gray-300 px-5 py-1 rounded-lg font-semibold text-lg text-gray-600">Cancelar</button>
                <button wire:click="save" class="bg-green-600 px-5 py-1 rounded-lg font-semibold text-lg text-gray-100">Registrar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>

