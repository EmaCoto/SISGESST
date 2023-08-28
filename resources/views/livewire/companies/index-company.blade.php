<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>
        <div class="grid lg:grid-cols-12 grid-cols-6 align-middle gap-4 font-semibold text-lg text-gray-600">
            <label for="buscarEmp"
                class="bg-gray-300 col-span-2 rounded-lg flex items-center justify-center w-full h-full px-3">Buscar
                empresa</label>
            <input wire:model="search" class="col-span-7 h-10 rounded-lg border-none bg-gray-300"
                placeholder="Nit example: 45740-8626" type="text" id="buscarEmp">
            <div class="bg-gray-300  col-span-1 rounded-lg flex align-middle justify-center">
                <button class="w-full h-full">Buscar</button>
            </div>
            <div class="bg-green-600 col-span-2 rounded-lg flex align-middle justify-center">
                <livewire:companies.create-company />
            </div>
        </div>
        <div class="grid lg:grid-cols-4 gap-8 mt-10 md:grid-cols-2 ">
            @foreach ($companies as $company)
                <a href="{{ route('show-company', ['id' => $company->id]) }}"
                    class="block bg-gray-300 p-3 rounded-lg bg-opacity-70">
                    <div class=" bg-green-600 p-1 mb-2 font-semibold rounded-lg mx-auto text-center text-gray-100">
                        <p class="block text-lg mx-3">{{ $company->name }}</p>
                    </div>
                    <div class="mx-3">
                        <h1>Nit: {{ $company->nit }}</h1>
                        <h1>{{ $company->email }}</h1>
                        <h1>Ciudad: {{ $company->city->name }}</h1>
                        <h1>Direct-workers: {{ $company->number_direct_workers }} </h1>
                        <h1>Indirect-workers:{{ $company->number_direct_workers }}</h1>
                    </div>
                </a>
            @endforeach
        </div>
    </x-content-block>
</div>
