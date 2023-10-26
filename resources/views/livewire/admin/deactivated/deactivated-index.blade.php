<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <x-content-admin>
            <input wire:model="search" class="w-1/2 mt-10 shadow-lg shadow-gray-500 focus:ring-blue-500 focus:bg-white  rounded-lg border-none"placeholder="Example: Walter or Example: 45740" type="text" id="buscarEmp">

            <div class="grid lg:grid-cols-3 gap-8 mt-10 md:grid-cols-2 ">
                @foreach ($companies as $company)
                        <div>
                            <a href="{{ route('show-company', ['id' => $company->id]) }}"
                                class="block active:bg-green-600 bg-white p-3 rounded-t-lg bg-opacity-70 hover:bg-opacity-100 duration-500 ease-out">
                                <div class=" bg-green-600 p-1 mb-2 font-semibold rounded-lg mx-auto text-center text-gray-100">
                                    <p class="block text-lg mx-3">{{ $company->name }}</p>
                                </div>
                                <div class="">
                                    <h1 class=""><i class="fa-solid fa-hashtag my-auto text-gray-500 w-10"></i>Nit:
                                        {{ $company->nit }}</h1>
                                    <h1 class=""><i class="fa-regular fa-envelope my-auto text-gray-500 w-10"></i>Email:
                                        {{ $company->email }}</h1>
                                    <h1 class=""><i class="fa-solid fa-city my-auto text-gray-500 w-10"></i>City:
                                        {{ $company->city->name }}</h1>
                                    <h1 class=""><i class="fa-solid fa-users text-gray-500 w-10"></i>Direct-workers:
                                        {{ $company->number_direct_workers }} </h1>
                                    <h1 class=""><i
                                            class="fa-solid fa-users-slash text-gray-500 w-10"></i>Indirect-workers:
                                        {{ $company->number_direct_workers }}</h1>
                                </div>
                            </a>
                            <div class="flex justify-center bg-white bg-opacity-70 rounded-b-lg">
                                <button wire:click="activateCompany({{$company->id}})" class="bg-green-600 hover:bg-green-800 px-3 py-1 mt-2 font-semibold rounded-lg mx-auto text-center text-gray-100">Activar</button>
                            </div>
                        </div>
                @endforeach
            </div>
        </x-content-admin>
    </main>
</div>
