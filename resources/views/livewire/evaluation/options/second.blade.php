
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="p-4">
        <div class="flex items-center sm:pr-4">
            <h1 class="text-sm lg:text-base xl:text-base 2xl:text-base font-semibold">NIVEL DE EXPOSICIÓN (NE)</h1>
        </div>
        <div class="grid grid-cols-2">
            <select class="block cursor-pointer bg-gray-100 border focus:bg-white border-gray-300 rounded-lg mt-2 border-b border-t focus:border-t focus:border-b focus:border-0 shadow-lg focus:border-green-500 focus:ring-0 focus:outline-none">
                <option value="">Seleccione una opción</option>
                @foreach ($exposureLevel as $exposure)
                    <option class="hover:bg-green-500" value="{{ $exposure->name }}">{{ $exposure->name }}</option>
                @endforeach
            </select>
            {{-- <div class="w-20 ml-2 mt-2 flex items-center rounded-lg justify-center border {{ $selectedSecondRange >= 4 ? 'bg-red-500' : ($selectedSecondRange >= 3 ? 'bg-orange-500' : ($selectedSecondRange >= 2 ? 'bg-yellow-400' : 'bg-green-500')) }}">
                @if ($exposure)
                    <p class="text-xl font-semibold text-white">{{ $options[$exposure]['range'] }}</p>
                @endif
            </div> --}}
        </div>
        {{-- <div class="mt-2 text-justify h-28">
            @if ($exposure)
                <span class="text-xs">{{ $options[$exposure]['description'] }}</span>
            @endif
        </div> --}}
    </div>
