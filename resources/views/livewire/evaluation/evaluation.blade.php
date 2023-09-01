<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>
        <form>
            @csrf
            <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
            {{-- TEXT --}}
            @if ($step == 1)
                <section>
                    <livewire:evaluation.text>
                </section>
            @endif
            {{-- OPTIONS --}}
            @if ($step == 2)
                <section>
                    <div class="justify-around m-auto">
                        <livewire:evaluation.options />
                    </div>
                </section>
            @endif
            {{-- NUMBER --}}
            @if ($step == 3)
                <section>
                    <livewire:evaluation.number />
                </section>
            @endif
            {{-- BUTTONS --}}
            <div class="flex justify-center w-[70%] 2xl:absolute bottom-20 mt-20 mx-auto">
                @if ($step > 1)
                    <button wire:click="decrementStep" type="button" class="cursor-pointer h-12 text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:outline-none w-28 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">Volver</button>
                @endif
                @if ($step < 3)
                    <button wire:click="incrementStep" type="button" class="cursor-pointer h-12 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:outline-none w-28 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">Siguiente</button>
                @else
                    <button type="submit" class="cursor-pointer text-white bg-gradient-to-r h-12 from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:outline-none w-28 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">Enviar</button>
                @endif
            </div>
        </form>
    </x-content-block>
</div>


{{-- lo que quiero hacer con mi código es lo siguiente, en mi vista que es un componente de livewire hay 3 secciones y dos botones. Quiero que cuando solo me aparezca la primer sección que es TEXT no se muestre el botón de volver, pero cuando le de siguiente me muestre la sección de SELECT y me muestre los dos botones el de volver y el de siguiente y cuando le de en volver, se me muestre nuevamente la sección de TEXT y si le doy siguiente, me muestre la sección de NUMBER y que el botón de volver me devuelva a la sección SELECT y que no me muestre el boton de siguiente, sino uno que diga enviar --}}

