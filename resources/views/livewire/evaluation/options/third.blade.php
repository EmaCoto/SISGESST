<div class="p-4">
    <div class="flex items-center sm:pr-4">
        <h1 class="text-sm lg:text-base xl:text-base 2xl:text-base font-semibold">NIVEL DE PROBABILIDAD (ND*NE)</h1>
    </div>
    <div class="grid grid-cols-2">
        <div class="py-2 w-full block text-center bg-gray-100 border border-gray-300 rounded-lg mt-2 border-b border-t shadow-lg">
            <p>{{ $name }}</p>
        </div>
        <div class="w-20 ml-2 mt-2 flex items-center rounded-lg justify-center border {{ $value >= 24 ? 'bg-red-500' : ($value >= 10 ? 'bg-orange-500' : ($value >= 6 ? 'bg-yellow-400' : 'bg-green-500')) }}">
            <p class="text-xl font-semibold text-white">{{ $value }}</p>
        </div>
    </div>
    <div class="mt-2 text-justify h-28">
        <span class="text-xs">{{ $meaning }}</span>
    </div>
</div>
