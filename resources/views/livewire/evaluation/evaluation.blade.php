{{-- The whole world belongs to you. --}}
<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>
        <form wire:submit.prevent="saveControls">
        @csrf
            {{--TEXT --}}
            <div>
                <livewire:evaluation.text>
            </div>
            {{-- SELECT--}}
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
            {{-- NUMBER--}}
            <div>
                <livewire:evaluation.number />
            </div>
            {{-- BUTTON--}}
            <div class="flex justify-center mt-8 p-6">
                <div>
                    <input type="submit" value="Siguiente" class="cursor-pointer text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 w-28 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 hover:scale-90 duration-300">
                </div>
            </div>
        </form>
    </x-content-block>
</div>

