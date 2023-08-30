<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>
        <form wire:submit.prevent="saveControls">
            @csrf

            @if ($currentStep === 'text')
                <div>
                    <livewire:evaluation.text>
                </div>
            @elseif ($currentStep === 'select')
                <div>
                    <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
                    <div class="flex justify-center">
                        <h1 class="text-xl font-bold mb-10 m-4">EVALUACIÓN DEL RIESGO</h1>
                    </div>
                    <div class="justify-around m-auto">
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-4">
                            <livewire:evaluation.options.first />
                            <livewire:evaluation.options.second />
                            <livewire:evaluation.options.third />

                            <livewire:evaluation.options.fourth />
                            <livewire:evaluation.options.fifth />
                            <livewire:evaluation.options.sixth />
                        </div>
                    </div>
                </div>
            @elseif ($currentStep === 'number')
                <div>
                    <livewire:evaluation.number />
                    <div class="flex justify-center mt-8 p-6">
                        <button wire:click='back' wire:loading.attr="disabled" type="button" class="cursor-pointer text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 w-28 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">Volver</button>
                        <button wire:loading.attr="disabled" type="submit" class="cursor-pointer text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 w-40 font-medium rounded-lg text-base px-1 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">Guardar respuestas</button>
                    </div>
                </div>
            @endif

            <div class="flex justify-center mt-8 p-6">
                <button wire:click='back' wire:loading.attr="disabled" type="button" class="cursor-pointer text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 w-28 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">Volver</button>
                <button wire:click="next" wire:loading.attr="disabled" type="button" class="cursor-pointer text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 w-28 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">Siguiente</button>
            </div>
        </form>
    </x-content-block>
</div>

