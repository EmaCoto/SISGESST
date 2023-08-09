<x-app-layout>
    <div class="mt-10 w-1/5 rounded-3xl border-t-2 border-gray-500 shadow-lg shadow-slate-200 flex flex-col justify-center m-auto p-4">
        <form action="{{ route('process.update', $process) }}" method="POST" class="mt-1">
            @method('PUT')
            @csrf

            <div class="relative z-0 w-full mb-6 group">
                <h1 class="font-bold text-lg">{{ $process->name }}</h1>
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <p class="text-justify">{{ $process->description }}</p>
            </div>

            <div>
                <input type="submit" value="Cerrar" class="text-white flex justify-center m-auto bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            </div>
        </form>
    </div>
</x-app-layout>
{{-- <h1>{{ $process->name }}</h1>
<p>{{ $process->description }}</p> --}}

