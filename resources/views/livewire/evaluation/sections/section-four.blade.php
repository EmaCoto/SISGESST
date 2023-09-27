<div>
    <section>
        <article>
            <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
            <div class="flex justify-center">
                <h1 class="text-xl font-bold mb-10 m-4">NÚMERO DE EXPUESTOS</h1>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 gap-4">
                <x-number-linked wire:model="linked"/>
                <x-number-contractors wire:model="contractor"/>
                <x-number-temporary wire:model="temporary"/>
                <x-number-time wire:model="time"/>
            </div>
        </article>
    </section>
</div>
