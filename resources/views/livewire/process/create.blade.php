<div>
    <button class=" rounded-lg  relative w-36 h-10 cursor-pointer flex items-center border border-green-500 bg-green-500 group hover:bg-green-500 active:bg-green-500 active:border-green-500" wire:click="$set('open', 'true')">
        <span class="text-white font-semibold ml-8 transform group-hover:translate-x-20 transition-all duration-300">Añadir</span>
        <span class="absolute right-0 h-full w-10 rounded-lg bg-green-500 flex items-center justify-center transform group-hover:translate-x-0 group-hover:w-full transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24"
                fill="none" class="svg w-8 text-white">
                <line y2="19" y1="5" x2="12" x1="12"></line>
                <line y2="12" y1="12" x2="19" x1="5"></line>
            </svg>
        </span>
    </button>
    {{-- The whole world belongs to you. --}}
    <x-dialog-modal wire:model='open'>

        <x-slot name='title'>

        </x-slot>

        <x-slot name='content'>
            <div>
                {{-- <div class="flex justify-end w-full align-middle text-lg font-bold">
                    <span>cerrar</span>
                    <div class="mx-2 group w-8 h-8 rounded-l-full rounded-br-full hover:rotate-45 ease-in duration-300 bg-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:rotate-45 ease-in duration-300" wire:click="$set('open', false)">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div> --}}
                <span class="text-gray-100 block text-center text-2xl font-bold my-4 bg-green-500 w-full px-6 py-2 rounded-lg shadow-md shadow-gray-400">Crear proceso</span>
                <form wire:submit.prevent="save">
                    @csrf
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="name" class="block text-lg font-semibold mb-2">Proceso:</label>
                        <x-input wire:model="name" name="name" id="name" placeholder="Example: Elaboración de anillo simbléfaron" class=""/>
                        <x-input-error for="name"/>
                    </div>
                    <div class="relative z-0 w-full mb-6 mt-6 group">
                        <label for="description" class="block text-lg font-semibold mb-2">Descripcion:</label>
                        <textarea rows="6" name="description" id="description" class="bg-gray-200 focus:bg-gray-50 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-44" wire:model="description"  placeholder="Example: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut sint eum repellat. Consequuntur debitis eius animi odit quis deleniti sequi deserunt nulla neque quisquam suscipit, exercitationem, tenetur libero aut sapiente."></textarea>

                        <x-input-error for="description"/>
                    </div>
                    <div class="pyt-1 flex justify-center">
                        <x-secondary-button class="mr-6 bg-gray-300" wire:click="$set('open', false)">
                            Cancelar
                        </x-secondary-button>
                        <input type="submit" value="Añadir proceso" class="text-white flex cursor-pointer bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    </div>
                </form>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
