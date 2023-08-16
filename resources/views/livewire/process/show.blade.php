{{-- The Master doesn't talk, he acts. --}}
<div>
    <button class="mx-2 p-1 rounded-lg flex items-center bg-green-500 text-white hover:bg-green-800 hover:text-white" wire:click="$set('open', 'false')">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
    </button>

    <x-dialog-modal wire:model='open'>
        <x-slot name='content'>
            <div class="relative w-full mb-6 group">
                <label for="name" class="block text-lg font-semibold mb-2">Proceso:</label>
                <p class="p-3 w-full bg-gray-200 rounded-r-lg rounded-bl-lg">{{ $processes->name }}</p>
                <x-input-error for="name"/>
            </div>
            <div class="relative w-full mb-6 mt-6 group">
                <label for="description" class="block text-lg font-bold mb-2">Descripción:</label>
                <textarea id="description" class="bg-gray-200 resize-none border-gray-200 border-0 focus:border-0 focus:ring-0 rounded-r-lg rounded-bl-lg shadow-sm w-full h-44" readonly>{{ $processes->description }}</textarea>

                <x-input-error for="description"/>
            </div>
            <div class="py-1 flex justify-center">
                <x-secondary-button class="bg-gray-300" wire:click="$set('open', false)">
                    Cerrar
                </x-secondary-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
