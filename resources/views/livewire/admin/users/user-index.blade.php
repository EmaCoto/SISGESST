<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <div id="contentEval" class="relative px-4 py-2 w-[85vw] h-[93.3vh] overflow-y-scroll bg-gray-200">

            <input wire:model="search" class="shadow-lg bg-gray-100 shadow-gray-500 focus:ring-green-500 focus:bg-white col-span-7 rounded-lg border-none w-1/2 my-5"
            placeholder="Sandra Lopez" type="text" id="buscarEmp">


            <table class="w-full table-auto rounded-lg overflow-hidden mt-4">
                <thead class="rounded-t-lg bg-green-700 h-14">
                    <tr class="text-white uppercase leading-normal">
                        <th >ID</th>
                        <th >Nombre</th>
                        <th >Correo</th>
                        <th >Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-600 text-sm font-light">
                    @foreach ($users as $user)
                    <tr class="border-b h-14 text-center">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </main>
</div>

