<div class="p-4">
    <div class="flex items-center sm:pr-4">
        <h1 class="text-sm lg:text-base xl:text-base 2xl:text-base font-semibold">NIVEL DE PROBABILIDAD (ND*NE)</h1>
    </div>
    <div class="grid grid-cols-2">
        <div class="py-2 w-full block text-center bg-gray-50 border border-gray-300 rounded-lg mt-2 border-b border-t shadow-lg">
            <p>{{ $name }}</p>
        </div>
        <div class="w-20 ml-2 mt-2 flex items-center rounded-lg justify-center border" style="background-color: {{ $color }}">
            <p class="text-xl font-semibold text-white">{{ $value }}</p>
        </div>
    </div>
    <x-selectedMeaning>
        <span class="text-xs">{{ $meaning }}</span>
    </x-selectedMeaning>
</div>
