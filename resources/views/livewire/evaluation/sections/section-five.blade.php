<div>
    <section>
        <article>
            <div class="flex flex-col justify-center">
                <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
                <h1 class="text-2xl font-bold mb-10 m-auto">MEDIDAS DE INTERVENCIÓN</h1>
            </div>
            <div class="grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-4 m-auto p-3">
                <x-measures-elimination wire:model.defer="elimination"/>
                <x-measures-substitution wire:model.defer="substitution"/>
                <x-measures-engineering wire:model.defer="engineeringControls"/>
            </div>
            <div  class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 gap-4 m-auto p-2">
                <x-measures-administrative wire:model.defer="administrativeControls"/>
                <x-measures-protection wire:model.defer="personalProtection"/>
            </div>
            <div class="flex flex-col justify-center mx-auto">
                <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
                <h1 class="text-xl font-bold pt-4 pb-6 mx-auto">CUMPLIMIENTO REQUISITO LEGAL</h1>
                <x-measures-legal wire:model.defer="legal"/>
            </div>
        </article>
    </section>
</div>
