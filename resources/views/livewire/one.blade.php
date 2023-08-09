<div class="bg-transparent">
    <div class="mt-10 w-3/4 rounded-3xl border shadow-lg shadow-slate-200 flex flex-col justify-center m-auto p-4">
        <div class="">
            <div class="flex justify-center">
                <h1 class="text-xl font-bold m-4">PROCESOS</h1>
            </div>
            <div class="flex justify-start w-10/12 m-auto text-justify">
                <p>Para dar inicio a la evaluación de un proceso, dirígete a la sección de "Añadir". Una vez que hayas seleccionado el proceso que deseas evaluar, continúa haciendo clic en el botón que indica "Siguiente" para avanzar en el proceso.</p>
            </div>
        </div>
        <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-white via-green-500 from-white bg-gradient-to-r ">
        <div>
            <div class="flex flex-row-reverse w-10/12 m-auto">
                {{-- <div class="text-green-500 m-5">
                    <a href="{{ route('process.create') }}" class=" border border-gray-100 hover:border-green-500 font-medium rounded-lg text-sm pl-8 pr-2 py-2.5 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 w-6 h-6 mb-2 absolute">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>Añadir
                    </a>
                </div> --}}
                    <a href="{{ route('process.create') }}" class=" rounded-lg  relative w-36 h-10 cursor-pointer flex items-center border border-green-500 bg-green-500 group hover:bg-green-500 active:bg-green-500 active:border-green-500">
                        <span class="text-white font-semibold ml-8 transform group-hover:translate-x-20 transition-all duration-300">Add Item</span>
                        <span class="absolute right-0 h-full w-10 rounded-lg bg-green-500 flex items-center justify-center transform group-hover:translate-x-0 group-hover:w-full transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg w-8 text-white">
                                <line y2="19" y1="5" x2="12" x1="12"></line>
                                <line y2="12" y1="12" x2="19" x1="5"></line>
                            </svg>
                        </span>
                    </a>
            </div>
            <ul class="m-auto w-10/12">
                @forelse ($process as $processes)
                    <li>
                        <div class="flex justify-between hover:bg-black hover:bg-opacity-10 rounded-lg items-center">
                            <input type="radio" wire:model="selectedProcess" name="process" id="process-{{ $processes->id }}" class="hidden" value="{{ $processes->id }}" >
                            <label for="process-{{ $processes->id }}" class="font-medium cursor-pointer p-5 hover:text-sky-600 active:text-violet-700">{{ $processes->name }}</label>
                            <div class="flex m-2">
                                <a href="{{ route('process.show', $processes) }}" class="mx-2 p-1 rounded-lg flex items-center bg-green-500 text-white hover:bg-green-800 hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </a>


                                <a href="{{ route('process.edit', $processes) }}" class="mx-2 p-1 rounded-lg flex items-center bg-blue-500 text-white hover:bg-blue-800 hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>

                                <form action="{{ route('process.destroy', $processes) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mx-2 p-1 rounded-lg flex items-center bg-red-500 text-white hover:bg-red-800 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </li>
                    @empty
                    <div class="text-center m-20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 m-auto text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                        </svg>
                        <p class="text-lg font-bold">La lista de procesos está vacía</p>
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
</div>


