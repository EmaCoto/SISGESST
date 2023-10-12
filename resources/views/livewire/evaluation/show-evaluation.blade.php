<div>
    <x-navbar-company :company="$companies" />

    <div class="w-full overflow-hidden pb-7" style="height: 84vh">
        <x-content-block>
            <h1 class="bg-teal-600 p-1 mb-6 font-semibold text-2xl rounded-lg w-4/5 mx-auto text-center text-gray-100">
                Procesos evaluados
            </h1>

            @if ($evaluations->count() > 0)
                <table class="w-full rounded-lg overflow-hidden">
                    <thead class="rounded-t-lg">
                        <tr class=" bg-teal-600 text-center text-gray-100 uppercase text-sm leading-normal">
                            <th class="py-3 px-6">N°</th>
                            <th class="py-3 px-6">Tarea</th>
                            <th class="py-3 px-6">Descripción</th>
                            <th class="py-3 px-6">Actividad</th>
                            <th class="py-3 px-6">Proceso</th>
                            <th class="py-3 px-6">Evaluador</th>
                            <th class="py-3 px-6">Fecha Evaluacion</th>
                            <th class="py-3 px-6">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-600 text-sm font-light">
                        @forelse ($evaluations as $key => $evaluation)
                            <tr class="text-left border-b-2 border-gray-200">
                                <td class="py-4 px-6">{{ $key + 1 }}</td>
                                <td class="py-4 px-6">{{ $evaluation->task->name }}</td>
                                <td class="py-4 px-6">{{ $evaluation->task->description }}</td>
                                <td class="py-4 px-6">{{ $evaluation->task->activity->name }}</td>
                                <td class="py-4 px-6">{{ $evaluation->task->activity->process->name }}</td>
                                <td class="py-4 px-6">{{ $evaluation->evaluator }}</td>
                                <td class="py-4 px-6">{{ $evaluation->created_at }}</td>
                                <td class="py-3 text-center">
                                    <div class="flex item-center justify-center align-middle">
                                        <div class="flex group relative">
                                            <span
                                                class="w-32 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-14 opacity-0 absolute bg-green-600 rounded-lg px-2">
                                                Ver
                                                evaluacion
                                            </span>
                                            @livewire('evaluation.detail-evaluation', ['evaluations' => $evaluation], key(time() . $evaluation->id))
                                        </div>
                                        <div class="flex group relative">
                                            <span
                                                class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-90 -top-8 -left-6 opacity-0 absolute bg-[#207C89] rounded-lg px-2">
                                                Descargar
                                            </span>
                                            <div>
                                                <button class="w-4 mr-2 transform hover:text-gray-400 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                        fill="#3D99A6" viewBox="0 0 384 512">
                                                        <path
                                                            d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 232V334.1l31-31c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-72 72c-9.4 9.4-24.6 9.4-33.9 0l-72-72c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l31 31V232c0-13.3 10.7-24 24-24s24 10.7 24 24z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center text-3xl p-5">
                                    <span>No hay informacion</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            @else
                <div class="bg-white rounded-lg p-10 w-5/6 mx-auto">
                    <h1 class="text-3xl text-center dark:text-gray-600 font-semibold">No hay procesos disponibles</h1>
                </div>
            @endif

            {{-- <div class="px-6">
                {{ $evaluations->links() }}
            </div> --}}
        </x-content-block>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>
