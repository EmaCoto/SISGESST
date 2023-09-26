<div class="w-full overflow-hidden py-8" style="height: 93vh">
    {{-- php artisan make:livewire evaluation/sections/SectionOne --}}
    <x-content-block>
        @if ($sectionPosition == 1)
            @livewire('evaluation.sections.section-one', [
                'id' => $processId,
                'sectionTaskId' => $taskId,
                'sectionDangerClassification' => $dangerClassification,
                'sectionDangerDescription' => $dangerDescription
            ])
        @elseif ($sectionPosition == 2)
            @livewire('evaluation.sections.section-two', [

            ])
        @elseif ($sectionPosition == 3)
            @livewire('evaluation.sections.section-three')
        @elseif ($sectionPosition == 4)
            @livewire('evaluation.sections.section-four')
        @elseif ($sectionPosition == 5)
            @livewire('evaluation.sections.section-five')
        @endif


        @if ($sectionPosition == 1)
            <button wire:click="nextSection"
                class="bg-green-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 right-20 z-50">Siguiente</button>
        @else
            <button wire:click="previousSection"
                class="bg-gray-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 left-20 z-50">Atras</button>
            {{-- <progress class="absolute bottom-10 left-56 w-4/6 rounded-full" value="{{$sectionPosition}}" max="5"></progress> --}}
            <button wire:click="nextSection"
                class="bg-green-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 right-20 z-50">Siguiente</button>
        @endif

    </x-content-block>
    <div class="absolute bg-red-500 w-56 top-10 right-4">
        <h1>{{ $taskId }}</h1>
        <h1>{{ $dangerClassification }}</h1>
        <h1>{{ $dangerDescription }}</h1>

    </div>
</div>
