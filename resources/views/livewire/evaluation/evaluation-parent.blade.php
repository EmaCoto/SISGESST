<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>
        <form wire:submit.prevent="save">
            @csrf
            @if ($currentSection == 1)
            <section>
                {{-- TEXTAREAS --}}
                <article>
                    <div class="flex flex-col justify-center">
                        <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
                        <h1 class="text-2xl font-bold mb-10 m-auto">MATRIZ DE RIESGOS Y PELIGROS</h1>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 gap-4 m-auto p-2">
                        <x-text-danger wire:model.defer="danger"/>
                        <x-text-effects wire:model.defer="effects" />
                    </div>
                    <div class="flex justify-center">
                        <h1 class="text-xl font-bold pt-6 m-4">CONTROLES EXISTENTES</h1>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-4 m-auto">
                        <x-text-source wire:model.defer="source" />
                        <x-text-means wire:model.defer="means" />
                        <x-text-individual wire:model.defer="individual" />
                    </div>
                </article>

                {{-- OPTIONS --}}
                <article>
                    <livewire:evaluation.options />
                </article>

                {{-- NUMBER --}}
                <article>
                    <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
                        <div class="flex justify-center">
                            <h1 class="text-xl font-bold mb-10 m-4">NÚMERO DE EXPUESTOS</h1>
                        </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 gap-4">
                        <x-number-linked wire:model.defer="linked"/>
                        <x-number-contractors wire:model.defer="contractor"/>
                        <x-number-temporary wire:model.defer="temporary"/>
                        <x-number-time wire:model.defer="time"/>
                    </div>
                </article>
            </section>
            @endif


            @if ($currentSection == 2)
            <section>
                <article>
                    <div class="flex flex-col justify-center">
                        <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
                        <h1 class="text-2xl font-bold mb-10 m-auto">MEDIDAS DE INTERVENCIÓN</h1>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 gap-4 m-auto p-2">
                        <x-measures-elimination wire:model.defer="elimination"/>
                        <x-measures-substitution wire:model.defer="substitution"/>
                        <x-measures-engineering wire:model.defer="engineering_controls"/>
                        <x-measures-administrative wire:model.defer="administrative_controls"/>
                        <x-measures-protection wire:model.defer="personal_protection"/>
                        {{-- <x-measures-legal wire:model.defer=""/> --}}
                    </div>
                </article>
            </section>
            @endif
            {{-- BUTTONS --}}
            <div class="flex justify-center m-auto mt-10 w-full">
                @if ($currentSection >1 )
                    <button type="button" wire:loading.remove wire:click="previousSection" class="border-b-0 relative inline-flex items-center justify-center px-10 py-3 overflow-hidden active:text-blue-300 font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group">
                        <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-gray-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                        <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                        <span class="relative text-lg">Volver</span>
                    </button>
                @endif
                @if ($currentSection < 2)
                    <button type="button" wire:loading.remove wire:click="nextSection" class="border-b-0 relative inline-flex items-center justify-center px-10 py-3 overflow-hidden active:text-blue-300 font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group">
                        <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-green-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                        <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                        <span class="relative text-lg">{{ $currentSection == 1 ? 'Siguiente' : 'Enviar' }}</span>
                    </button>
                @endif
                @if ($currentSection > 1)
                <button type="submit" wire:loading.remove class="border-b-0 relative inline-flex items-center justify-center px-10 py-3 overflow-hidden active:text-blue-300 font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group">
                    <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-green-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                    <span class="relative text-lg">Enviar</span>
                </button>
                @endif
                <svg wire:loading xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="animate-spin h-14 w-6 flex flex-col items-center">
                    <path d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/>
                </svg>
            </div>
        </form>
    </x-content-block>
</div>



