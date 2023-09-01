<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>
        <form >
            @csrf
            {{-- TEXT --}}
            <section >
                <livewire:evaluation.text>
            </section>

            {{-- OPTIONS --}}
            <section>
                    <livewire:evaluation.options />
            </section>

            {{-- NUMBER --}}
            <section>
                <livewire:evaluation.number />
            </section>

            {{-- BUTTONS --}}
            <div class="flex justify-center m-auto mt-10 w-full">
                <button type="submit" class="cursor-pointer text-white bg-gradient-to-r h-12 from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:outline-none  font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">Enviar</button>
            </div>
        </form>
    </x-content-block>
</div>


{{-- lo que quiero hacer con mi código es lo siguiente, en mi vista que es un componente de livewire hay 3 secciones y dos botones. Quiero que cuando solo me aparezca la primer sección que es TEXT no se muestre el botón de volver, pero cuando le de siguiente me muestre la sección de SELECT y me muestre los dos botones el de volver y el de siguiente y cuando le de en volver, se me muestre nuevamente la sección de TEXT y si le doy siguiente, me muestre la sección de NUMBER y que el botón de volver me devuelva a la sección SELECT y que no me muestre el boton de siguiente, sino uno que diga enviar --}}

