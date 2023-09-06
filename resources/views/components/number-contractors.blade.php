<div>
    <h1 class="text-sm font-semibold">CONTRATISTAS</h1>
    <p class="text-justify">Menciona el número de contratistas</p>
    <div class="w-full mt-2 ">
        <input wire:model.defer="contractor" type="number" id="" class="focus:bg-white focus:border-t focus:border-b focus:border-0 focus:border-green-500 focus:ring-0 focus:outline-none py-2 w-full block text-center h-10 bg-gray-100 border border-gray-300 rounded-lg mt-2 border-b border-t shadow-lg">
    </div>
    @error('contractor') <span class="error text-red-500">{{ $message }}</span> @enderror
</div>
