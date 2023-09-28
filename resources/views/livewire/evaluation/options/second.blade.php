{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<div>
    <div class="p-4">
        <div class="flex items-center sm:pr-4">
            <h1 class="text-sm lg:text-base xl:text-base 2xl:text-base font-semibold">NIVEL DE EXPOSICIÓN (NE)</h1>
        </div>
        <div class="grid grid-cols-2">
            <select wire:model="exposureLevel" class="cursor-pointer bg-gray-50 focus:text-black border focus:bg-white border-gray-300 rounded-lg mt-2 border-b border-t focus:border-t focus:border-b focus:border-0 shadow-lg focus:border-green-500 focus:ring-0 focus:outline-none">
                <option value="" hidden>Selecciona una opción</option>
                @foreach ($exposures as $exposure)
                    <option value="{{ $exposure->id }}">{{ $exposure->name }}</option>
                @endforeach
            </select>
            <div class="w-20 ml-2 mt-2 flex items-center rounded-lg justify-center border" style="background-color: {{ $exposureColor }};">
                <p class="text-xl font-semibold text-white">{{ $exposureValue }}</p>
            </div>
        </div>
        <x-selectedMeaning>
            <span class="text-xs">{{ $exposureMeaning }}</span>
        </x-selectedMeaning>
    </div>
    {{-- @error('selectedDeficiency') <span class="error text-red-500">{{ $message }}</span> @enderror --}}
</div>
