{{-- The Master doesn't talk, he acts. --}}
<div>
    <button class="mx-2 p-1 rounded-lg flex items-center bg-green-500 text-white hover:bg-green-800 hover:text-white" wire:click="$set('open', 'false')">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
    </button>

    <x-dialog-modal wire:model='open'>

        <x-slot name='title'>

        </x-slot>

        <x-slot name='content'>
            <div class="">
                <form action="{{ route('process.update', $processes) }}" method="POST" class="mt-1">
                    @method('PUT')
                    @csrf

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="font-bold text-lg">{{ $processes->name }}</h1>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <p class="text-justify">{{ $processes->description }}</p>
                    </div>

                    <div>
                        <input type="submit" value="Cerrar" class="text-white flex justify-center m-auto bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    </div>
                </form>
            </div>
        </x-slot>

    </x-dialog-modal>
</div>
