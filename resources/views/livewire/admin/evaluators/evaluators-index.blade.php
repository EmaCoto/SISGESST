<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <div id="contentEval" class="relative px-20 py-6 w-[85vw] h-[93.9vh] overflow-y-scroll overflow-x-hidden bg-gray-200 ">
            <input wire:model="search" class="shadow-lg bg-gray-100 shadow-gray-500 focus:ring-green-500 focus:bg-white  rounded-lg border-none w-1/2" placeholder="Example: Walter or Example: 45740" type="text" id="buscarEmp">

            <table class="w-full table-auto rounded-lg overflow-hidden mt-4">
                <thead class="rounded-t-lg">
                    <tr class="bg-[#3498db] text-gray-100 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">N°</th>
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="py-3 px-6 text-center">Correo</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-600 text-sm font-light">
                    @foreach ($evaluators as $evaluator)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span class="font-medium ">{{ $evaluator->id }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{ $evaluator->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-justify">
                                <div class="flex items-center justify-center">
                                    <span>{{ $evaluator->email }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    @can('edit.delete.activities')
                                        borrar
                                        editar
                                    @endcan

                                    {{-- @if ($openDelete)
                                        <div class="fixed z-50 inset-0 flex items-center justify-center"
                                            wire:click="$set('openDelete', false)">
                                            <div class="absolute inset-0 z-40 bg-black opacity-10 modal-overlay"></div>

                                            <div
                                                class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-red-500 rounded-xl modal-container md:max-w-md">
                                                <!-- Content of the modal -->
                                                <div class="flex gap-3 py-2 bg-red-500 border border-red-500">
                                                    <h3 class="w-full text-2xl text-center text-gray-100 ">Eliminar</h3>

                                                </div>
                                                <div class="px-6 py-4 text-left modal-content">

                                                    <p class="text-xl text-gray-500">
                                                        ¿Estás seguro de que deseas eliminar este proceso?
                                                    </p>
                                                    <div class="mt-4 text-center">
                                                        <x-secondary-button wire:click="$set('openDelete', false)"
                                                            class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                                                            Cancelar
                                                        </x-secondary-button>
                                                        <x-secondary-button wire:click="deleteConfirmed"
                                                            class="mr-4 text-red-500 border border-red-500 shadow-lg hover:shadow-red-400">
                                                            Eliminar
                                                        </x-secondary-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $evaluators->links() }}
        </div>
    </main>
</div>
