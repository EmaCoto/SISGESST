<div>
    <section>
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
    </section>
</div>
