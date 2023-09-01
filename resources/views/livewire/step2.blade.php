
<div>
    <h1>Paso 2</h1>
    <div>
        <label for="step2_field1">Campo 1:</label>
        <input wire:model="data.step2field1" type="text" id="step2field1">
        @error('data.step2field1') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="step2_field2">Campo 2:</label>
        <input wire:model="data.step2field2" type="text" id="step2field1">
        @error('data.step2field2') <span class="error">{{ $message }}</span> @enderror
    </div>
</div>
