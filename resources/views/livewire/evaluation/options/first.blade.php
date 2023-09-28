<div>
    <div class="p-4">
        <div class="flex items-center sm:pr-4">
            <h1 class="text-sm lg:text-base xl:text-base 2xl:text-base font-semibold">NIVEL DE DEFICIENCIA (ND)</h1>
        </div>
        <div class="grid grid-cols-3">
            <select wire:model="deficiencyLevel" class="col-span-2 cursor-pointer bg-gray-50 focus:text-black border focus:bg-white border-gray-300 rounded-lg mt-2 border-b border-t focus:border-t focus:border-b focus:border-0 shadow-lg focus:border-green-500 focus:ring-0 focus:outline-none">
                <option value="" hidden>-- Selecciona una opción --</option>
                @foreach ($deficiencies as $deficiency)
                    <option value="{{ $deficiency->id }}">{{ $deficiency->name }}</option>
                @endforeach
            </select>
            <div class="col-span-1 w-20 ml-2 mt-2 flex items-center rounded-lg justify-center border" style="background-color: {{ $deficiencyColor }};">
                <p class="text-xl font-semibold text-white">{{ $deficiencyValue }}</p>
            </div>
        </div>
        <x-selectedMeaning>
            <span class="text-xs">{{ $deficiencyMeaning }}</span>
        </x-selectedMeaning>
    </div>
</div>
