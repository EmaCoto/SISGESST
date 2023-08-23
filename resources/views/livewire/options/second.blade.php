
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="w-6/12 p-4">
        <div class="flex items-center sm:pr-4">
            <h1 class="font-semibold">NIVEL DE EXPOSICIÓN (NE)</h1>
        </div>
        <div class="flex">
            <select wire:model="exposure" class="block cursor-pointer mt-2 border-0 border-b border-t focus:border-t border-black focus:border-b focus:border-0 rounded shadow-lg focus:border-green-500 focus:ring-0 focus:outline-none">
                <option value="">Seleccione una opción</option>
                @foreach ($options as $option => $number)
                    <option class="hover:bg-green-500" value="{{ $option }}">{{ $option }}</option>
                @endforeach
            </select>
            <div class="w-full ml-2 mt-2 flex items-center justify-center border">
                @if ($exposure)
                    <p class="text-xl font-semibold ">{{ $options[$exposure]['range'] }}</p>
                @endif
            </div>
        </div>
        <div class="mt-2 text-justify">
            @if ($exposure)
                <span class="text-xs">{{ $options[$exposure]['description'] }}</span>
            @endif
        </div>
    </div>
