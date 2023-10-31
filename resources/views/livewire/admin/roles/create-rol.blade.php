<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <x-content-admin>
            <div class="form-group">
                <label for="name">Nombre del Rol:</label>
                <input type="text" wire:model="name" class="form-control">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Permisos:</label>
                @foreach($this->permissionValue as $index => $permission)
                    <div class="form-check">
                        <input type="checkbox" wire:model.defer="permissionValue.{{ $index }}">
                        <input class="bg-inherit border-none p-0 m-0 pointer-events-none" type="text" wire:model.defer="permissionName.{{ $index }}" readonly>
                    </div>
                @endforeach
                @error('permissions') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button wire:click='createRole' type="submit">Crear Rol y Asignar Permisos</button>

        </x-content-admin>
    </main>
</div>
