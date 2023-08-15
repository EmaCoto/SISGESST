<div class="mt-10 w-4/5 rounded-3xl border shadow-lg shadow-slate-200 flex flex-col justify-center m-auto p-4 bg-white">
    <div class="">
        <div class="flex justify-center">
            <h1 class="text-xl font-bold m-4">PROCESOS</h1>
        </div>
        <div class="flex justify-start w-10/12 m-auto text-justify">
            <p>Para dar inicio a la evaluación de un proceso, dirígete a la sección de "Añadir". Una vez que hayas seleccionado el proceso que deseas evaluar, continúa haciendo clic en el botón que indica "Siguiente"para avanzar en el proceso.</p>
        </div>
    </div>
    <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-white via-green-500 from-white bg-gradient-to-r ">
    <div>
        <div class="flex justify-between w-10/12 m-auto">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-8 border-r pr-1 m-1 absolute">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                <input type="text" name="" id="" wire:model="search" class="rounded-lg h-10 pl-8 border-2 focus:border-green-500 w-96 focus:ring-0" placeholder="Buscar...">
            </div>
            <livewire:process.create/>
        </div>
        <ul class="m-auto mt-4 w-10/12">
            @forelse ($process as $processes)
                <li>
                    <div class="flex justify-between hover:bg-black hover:bg-opacity-10 rounded-lg items-center">
                        <input type="radio" wire:model="selectedProcess" name="process" id="process-{{ $processes->id }}" class="hidden" value="{{ $processes->id }}">
                        <label for="process-{{ $processes->id }}" class="font-medium cursor-pointer p-5 hover:text-sky-600 active:text-violet-700">{{ $processes->name }}</label>
                        <div class="flex m-2">
                            @livewire('process.show', ['processes' => $processes], key(time().$processes->id))

                            @livewire('process.edit', ['processes' => $processes], key(time().$processes->id))

                                <button type="submit" class="mx-2 p-1 rounded-lg flex items-center bg-red-500 text-white hover:bg-red-800 hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>

                        </div>
                    </div>
                </li>
            @empty
                <div class="text-center m-20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 m-auto text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                    <p class="text-lg font-bold">No existe ningún registro coincidente</p>
                </div>
            @endforelse
        </ul>

        <div class="flex justify-center mt-8 p-6">
            <div>
                <button type="submit" wire:click="nextStep" class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 w-28 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" wire:loading.attr="disabled" @if (!$selectedProcess) disabled @endif>Siguiente</button>
            </div>
        </div>
    </div>
    
</div>
