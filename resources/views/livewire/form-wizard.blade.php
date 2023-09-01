<div>

    @if ($step === 1)
        <livewire:step1 :data="$data" />
    @elseif ($step === 2)
        <livewire:step2 :data="$data" />
    @elseif ($step === 3)
        <livewire:step3 :data="$data" />
    @endif

    @if ($step > 1)
        <button wire:click="prevStep">Anterior</button>
    @endif

    @if ($step < 3)
        <button wire:click="nextStep">Siguiente</button>
    @endif

    @if ($step === 3)
        <button wire:click="submitForm">Enviar</button>
    @endif

</div>
