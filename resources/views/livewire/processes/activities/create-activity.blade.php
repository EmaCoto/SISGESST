<div>
    <button wire:click="$set('open', true)" class="bg-green-600 rounded-lg px-4 py-2">crear actividad</button>

    <x-dialog-modal wire:model="open">
        <x-slot name="content">
            <h1 class="bg-green-600 p-1 mb-2 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">Crear actividad</h1>
            <div class="w-4/5 mx-auto my-5">
                <x-label>Seleccione un proceso:</x-label>
                <select wire:model.defer="process_id" class="bg-gray-200 border-2 border-gray-300 rounded-md w-full h-9 py-0 px-4 mb-4 focus:ring-0 focus:border-green-600">
                    <option>-- Seleccione --</option>
                    @foreach ($selectedProcess as $process)
                        <option value="{{$process->id}}">{{$process->name}}</option>
                    @endforeach
                </select>

                <x-label>Nombre actividad:</x-label>
                <x-input type="text" wire:model.defer="name"/>

                <x-label>Descripcion actividad:</x-label>
                <x-input type="email" wire:model.defer="description"/>
            </div>

            <div class="w-4/5 md:w-3/5 mx-auto flex justify-between mt-6 mb-1">
                <button wire:click="$set('open', false)" class="bg-gray-300 px-5 py-1 rounded-lg font-semibold text-lg text-gray-600">Cancelar</button>
                <button wire:click="save" class="bg-green-600 px-5 py-1 rounded-lg font-semibold text-lg text-gray-100">Crear</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>

