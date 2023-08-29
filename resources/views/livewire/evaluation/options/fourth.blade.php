{{-- The best athlete wants his opponent at his best. --}}
<div class="p-4">
    <div class="flex items-center sm:pr-4">
        <h1 class="text-sm lg:text-base xl:text-base 2xl:text-base font-semibold">NIVEL DE CONSECUENCIA</h1>
    </div>
    <div class="grid grid-cols-2">
        <select class="block cursor-pointer bg-gray-100 border focus:bg-white border-gray-300 rounded-lg mt-2 border-b border-t focus:border-t focus:border-b focus:border-0 shadow-lg focus:border-green-500 focus:ring-0 focus:outline-none">
            <option value="">Seleccione una opción</option>
            @foreach ($consequenceLevel as $consequence)
                <option class="hover:bg-green-500" value="{{ $consequence->name }}">{{ $consequence->name }}</option>
            @endforeach
        </select>

            {{-- <div class="w-full ml-2 mt-2 flex items-center justify-center border">
                <p class="text-xl font-semibold ">{{ [$consequenceLevel->value] }}</p>
            </div> --}}

    </div>
    {{-- <div class="mt-2 text-justify h-20">
        @if ($consequence)
            <span class="text-xs">{{ $options[$consequence]['description'] }}</span>
        @endif
    </div> --}}
</div>

