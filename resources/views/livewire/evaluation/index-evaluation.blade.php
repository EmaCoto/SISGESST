<div class="w-full overflow-hidden py-8" style="height: 93vh">
    {{-- php artisan make:livewire evaluation/sections/SectionOne --}}
    <x-content-block>
        @if ($sectionPosition == 1)
            @livewire('evaluation.sections.section-one', ['id' => $processId])
        @elseif ($sectionPosition == 2)
            @livewire('evaluation.sections.section-two')
        @elseif ($sectionPosition == 3)
            @livewire('evaluation.sections.section-three')
        @elseif ($sectionPosition == 4)
            @livewire('evaluation.sections.section-four')
        @endif


        @if ($sectionPosition == 1)
            <button wire:click="nextSection"
                class="bg-green-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 right-20 z-50">Siguiente</button>
        @else
            <button wire:click="previousSection"
                class="bg-gray-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 left-20 z-50">Atras</button>
            <button wire:click="nextSection"
                class="bg-green-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 right-20 z-50">Siguiente</button>
        @endif

    </x-content-block>
</div>
