<div>
    <h1>Paso 1</h1>
    <div>
        <label for="step1_field1">Campo 1:</label>
        <input wire:model="data.step1_field1" type="text" id="step1_field1">
        @error('data.step1_field1') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="step1_field2">Campo 2:</label>
        <input wire:model="data.step1_field2" type="text" id="step1_field2">
        @error('data.step1_field2') <span class="error">{{ $message }}</span> @enderror
    </div>
</div>
