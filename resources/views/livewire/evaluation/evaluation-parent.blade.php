<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>
        <form wire:submit.prevent="submitForm">
            @csrf
            {{-- TEXT --}}
            <section>
                <livewire:evaluation.text />
            </section>

            {{-- OPTIONS --}}
            {{-- <section>
                <livewire:evaluation.options />
            </section> --}}

            {{-- NUMBER --}}
            {{-- <section>
                <livewire:evaluation.number />
            </section> --}}

            {{-- BUTTONS --}}
            <div class="flex justify-center m-auto mt-10 w-full">
                <button wire:click="submitForm" class="relative inline-flex items-center justify-center px-10 py-4 overflow-hidden font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group">
                    <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-green-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                    <span class="relative">Button Text</span>
                </button>
            </div>
        </form>
    </x-content-block>
</div>

{{-- tengo un componente(padre) de livewire, dentro del componente está la sección TEXT que esa sección llama a otro componente(hijo), dentro del componente(hijo) hay cinco textareas, quiero que la información de los cinco textarea se almacenen en su controlador en forma de array y que en el controlador del componente(padre) se pueda guardar en base de datos el array del componente(hijo). por otro lado en la vista del componente(padre) tengo el form y el boton de enviar. quiero que por favor me mandes el codigo de todo incluyendo vistas y controlador, modelo y migración. esto es lo que llevo de codigo corriguelo segun lo que quiero --}}
