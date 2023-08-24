<div class="w-6/12 p-4">
    <div class="flex items-center sm:pr-4">
        <h1 class="font-semibold">NIVEL DE RIESGO INTERVENCIÓN (NR)</h1>
    </div>
    <div class="flex">
        <div class="py-2 w-full text-center mt-2 border-0 border-b border-t rounded shadow-lg border-black">
            <!-- Mostrar la variable $intervention -->
            <p>{{ $intervention }}</p>
        </div>
        <div class="w-full ml-2 mt-2 flex items-center justify-center border text-xl font-semibold ">
            <!-- Mostrar la variable $resultado -->
            {{ $resultado }}
        </div>
    </div>
    <div class="mt-2 text-justify">
        <!-- Mostrar la variable $description -->
        <span class="text-xs">{{ $description }}</span>
    </div>
</div>
