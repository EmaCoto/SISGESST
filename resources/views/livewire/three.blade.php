{{-- The whole world belongs to you. --}}


<div class="lg:w-4/5 mt-10 rounded-lg border shadow-lg shadow-slate-200 flex flex-col justify-center m-auto p-4 bg-white">
    {{--first --}}
    <form wire:submit.prevent="saveControls">
        @csrf
        <div>
            <div class=" flex justify-center">
                <h1 class="text-2xl font-bold mb-10 m-4">MATRIZ DE RIESGOS Y PELIGROS</h1>
            </div>
            <div>
                <div class="w-11/12 flex justify-around m-auto">
                    <div class="w-5/12 mb-2 border border-gray-200 rounded-lg bg-gray-50 focus-within:bg-green-500 ease-in duration-300">
                        <div class="flex items-center justify-between px-3 py-2">
                            <div class="flex items-center sm:pr-4">
                                <h1 class="font-semibold ">PELIGRO (origen)</h1>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="h-6 w-6">
                                <path d="M6.457 1.047c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0 1 14.082 15H1.918a1.75 1.75 0 0 1-1.543-2.575Zm1.763.707a.25.25 0 0 0-.44 0L1.698 13.132a.25.25 0 0 0 .22.368h12.164a.25.25 0 0 0 .22-.368Zm.53 3.996v2.5a.75.75 0 0 1-1.5 0v-2.5a.75.75 0 0 1 1.5 0ZM9 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path>
                            </svg>
                        </div>
                        <div class="px-4 py-2 bg-white rounded-b-lg">
                            <textarea wire:model="danger" id="editor" rows="5" class="resize-none block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0" placeholder="write your thoughts here..." required></textarea>
                        </div>
                    </div>
                    <div class="w-5/12 mb-2 border border-gray-200 rounded-lg bg-gray-50 focus-within:bg-green-500 ease-in duration-300">
                        <div class="flex items-center justify-between px-3 py-2">
                            <div class="flex items-center sm:pr-4">
                                <h1 class="font-semibold">EFECTOS POSIBLES</h1>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path stroke="" stroke-width="1" d="M13 16.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-2.517-7.665c.112-.223.268-.424.488-.57C11.186 8.12 11.506 8 12 8c.384 0 .766.118 1.034.319a.953.953 0 0 1 .403.806c0 .48-.218.81-.62 1.186a9.293 9.293 0 0 1-.409.354 19.8 19.8 0 0 0-.294.249c-.246.213-.524.474-.738.795l-.126.19V13.5a.75.75 0 0 0 1.5 0v-1.12c.09-.1.203-.208.347-.333.063-.055.14-.119.222-.187.166-.14.358-.3.52-.452.536-.5 1.098-1.2 1.098-2.283a2.45 2.45 0 0 0-1.003-2.006C13.37 6.695 12.658 6.5 12 6.5c-.756 0-1.373.191-1.861.517a2.944 2.944 0 0 0-.997 1.148.75.75 0 0 0 1.341.67Z"></path>
                                <path stroke="" stroke-width="1" d="M9.864 1.2a3.61 3.61 0 0 1 4.272 0l1.375 1.01c.274.2.593.333.929.384l1.686.259a3.61 3.61 0 0 1 3.021 3.02l.259 1.687c.051.336.183.655.384.929l1.01 1.375a3.61 3.61 0 0 1 0 4.272l-1.01 1.375a2.106 2.106 0 0 0-.384.929l-.259 1.686a3.61 3.61 0 0 1-3.02 3.021l-1.687.259a2.106 2.106 0 0 0-.929.384l-1.375 1.01a3.61 3.61 0 0 1-4.272 0l-1.375-1.01a2.106 2.106 0 0 0-.929-.384l-1.686-.259a3.61 3.61 0 0 1-3.021-3.02l-.259-1.687a2.106 2.106 0 0 0-.384-.929L1.2 14.136a3.61 3.61 0 0 1 0-4.272l1.01-1.375c.201-.274.333-.593.384-.929l.259-1.686a3.61 3.61 0 0 1 3.02-3.021l1.687-.259c.336-.051.655-.183.929-.384Zm3.384 1.209a2.11 2.11 0 0 0-2.496 0l-1.376 1.01a3.61 3.61 0 0 1-1.589.658l-1.686.258a2.111 2.111 0 0 0-1.766 1.766l-.258 1.686a3.614 3.614 0 0 1-.658 1.59l-1.01 1.375a2.11 2.11 0 0 0 0 2.496l1.01 1.376a3.61 3.61 0 0 1 .658 1.589l.258 1.686a2.11 2.11 0 0 0 1.766 1.765l1.686.26a3.613 3.613 0 0 1 1.59.657l1.375 1.01a2.11 2.11 0 0 0 2.496 0l1.376-1.01a3.61 3.61 0 0 1 1.589-.658l1.686-.258a2.11 2.11 0 0 0 1.765-1.766l.26-1.686a3.613 3.613 0 0 1 .657-1.59l1.01-1.375a2.11 2.11 0 0 0 0-2.496l-1.01-1.376a3.61 3.61 0 0 1-.658-1.589l-.258-1.686a2.111 2.111 0 0 0-1.766-1.766l-1.686-.258a3.614 3.614 0 0 1-1.59-.658Z"></path>
                            </svg>
                        </div>
                        <div class="px-4 py-2 bg-white rounded-b-lg">
                            <textarea wire:model="effects" id="editor" rows="5" class="resize-none block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0" placeholder="write your thoughts here..." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <h1 class="text-xl font-bold pt-6 m-4">CONTROLES EXISTENTES</h1>
                </div>
                <div class="flex justify-between w-10/12 m-auto">
                    <div class="w-4/12 m-2 border border-gray-200 rounded-lg bg-gray-50 focus-within:bg-green-500 ease-in duration-300">
                        <div class="flex items-center justify-between px-3 py-2">
                            <div class="flex items-center sm:pr-4">
                                <h1 class="font-semibold">FUENTE</h1>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path d="M80 104a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm80-24c0 32.8-19.7 61-48 73.3v87.8c18.8-10.9 40.7-17.1 64-17.1h96c35.3 0 64-28.7 64-64v-6.7C307.7 141 288 112.8 288 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V160c0 70.7-57.3 128-128 128H176c-35.3 0-64 28.7-64 64v6.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3V352 153.3C19.7 141 0 112.8 0 80C0 35.8 35.8 0 80 0s80 35.8 80 80zm232 0a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM80 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/>
                            </svg>
                        </div>
                        <div class="px-4 py-2 bg-white rounded-b-lg">
                            <textarea wire:model="source" id="editor" rows="5" class="resize-none block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0" placeholder="write your thoughts here..." required></textarea>
                        </div>
                    </div>
                    <div class="w-4/12 m-2 border border-gray-200 rounded-lg bg-gray-50 focus-within:bg-green-500 ease-in duration-300">
                        <div class="flex items-center justify-between px-3 py-2">
                            <div class="flex items-center sm:pr-4">
                                <h1 class="font-semibold">MEDIO</h1>
                            </div>
                            <img src="{{ asset('img/technical-support.svg') }}" alt="" class="h-6 w-6">
                        </div>
                        <div class="px-4 py-2 bg-white rounded-b-lg">
                            <textarea wire:model="mean" id="editor" rows="5" class="resize-none block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0" placeholder="write your thoughts here..." required></textarea>
                        </div>
                    </div>
                    <div class="w-4/12 m-2 box-border border border-gray-200 rounded-lg bg-gray-50 focus-within:bg-green-500 ease-in duration-300">
                        <div class="flex items-center justify-between px-3 py-2">
                            <div class="flex items-center sm:pr-4">
                                <h1 class="font-semibold">INDIVIDUO</h1>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class="w-6 h-6">
                                <path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l44.9 74.7c-16.1 17.6-28.6 38.5-36.6 61.5c-1.9-1.8-3.5-3.9-4.9-6.3L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152zM432 224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zM368 321.6V328c0 8.8 7.2 16 16 16s16-7.2 16-16v-6.4c0-5.3 4.3-9.6 9.6-9.6h40.5c7.7 0 13.9 6.2 13.9 13.9c0 5.2-2.9 9.9-7.4 12.3l-32 16.8c-5.3 2.8-8.6 8.2-8.6 14.2V384c0 8.8 7.2 16 16 16s16-7.2 16-16v-5.1l23.5-12.3c15.1-7.9 24.5-23.6 24.5-40.6c0-25.4-20.6-45.9-45.9-45.9H409.6c-23 0-41.6 18.6-41.6 41.6z"/>
                            </svg>
                        </div>
                        <div class="px-4 py-2 bg-white rounded-b-lg">
                            <textarea wire:model="individual" id="editor" rows="5" class="resize-none block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0" placeholder="write your thoughts here..." required></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- second / risk evaluation--}}
    <div>
        <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-white via-green-500 from-white bg-gradient-to-r ">
        <div class="flex justify-center">
            <h1 class="text-xl font-bold mb-10 m-4">EVALUACIÓN DEL RIESGO</h1>
        </div>
        <div>
            <div class="p-10 justify-around w-11/12 m-auto">
                <div class="flex">
                    <livewire:options.first />
                    <livewire:options.second />
                    <livewire:options.third />
                </div>
                <div class="flex">
                    <livewire:options.fourth />
                </div>
            </div>
        </div>
    </div>
        <div class="flex justify-center mt-8 p-6">
            <div>
                <input type="submit" value="Siguiente" class="cursor-pointer text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 w-28 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            </div>
        </div>
    </form>


    {{-- third --}}
    <div>
            <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-white via-green-500 from-white bg-gradient-to-r ">
            <div class="w-11/12 flex justify-between">
                <div class="w-10/12 flex justify-around m-auto">
                    <div>
                        <div class="flex justify-center">
                            <h1 class="text-xl font-bold mb-10 m-4">VALORACIÓN DEL RIESGO</h1>
                        </div>
                        <h1 class="text-sm font-semibold">ACEPTABILIDAD DEL RIESGO</h1>
                        <p class="w-11/12 text-justify">Seleccione la acepta quae aut quia illum nulla officiis fuga!</p>
                        <div class="w-full mt-2 ">
                            <select name="" id="" class="w-11/12 border-0 border-b focus:border-b-green-500 shadow-sm shadow-slate-400 focus:rounded-t-xl focus:rounded-b-none rounded-full  focus:outline-none focus:ring-0">
                                    <option>Aceptable</option>
                                    <option>No aceptable</option>
                              </select>
                        </div>
                    </div>
                </div>
                <div class="w-11/12 justify-around m-auto">
                    <div class="flex justify-center">
                        <h1 class="text-xl font-bold mb-10 m-4">NÚMERO DE EXPUESTOS</h1>
                    </div>
                    <div class="flex">
                        <div>
                            <h1 class="text-sm font-semibold">VINCULADOS</h1>
                            <p class="w-11/12 text-justify">Escribe el número de vinculados</p>
                            <div class="w-full mt-2 ">
                                <input type="number" id="" class="w-11/12 border-0 border-b focus:border-b-green-500 shadow-sm shadow-slate-400 focus:rounded-t-xl focus:rounded-b-none rounded-full  focus:outline-none focus:ring-0">
                            </div>
                        </div>
                        <div>
                            <h1 class="text-sm font-semibold">CONTRATISTAS</h1>
                            <p class="w-11/12 text-justify">Escribe el número de contratistas</p>
                            <div class="w-full mt-2 ">
                                <input type="number" id="" class="w-11/12 border-0 border-b focus:border-b-green-500 shadow-sm shadow-slate-400 focus:rounded-t-xl focus:rounded-b-none rounded-full  focus:outline-none focus:ring-0">
                            </div>
                        </div>
                        <div>
                            <h1 class="text-sm font-semibold">TEMPORALES</h1>
                            <p class="w-11/12 text-justify">Escribe el número de temporales</p>
                            <div class="w-full mt-2 ">
                                <input type="number" id="" class="w-11/12 border-0 border-b focus:border-b-green-500 shadow-sm shadow-slate-400 focus:rounded-t-xl focus:rounded-b-none rounded-full  focus:outline-none focus:ring-0">
                            </div>
                        </div>
                        <div>
                            <h1 class="text-sm font-semibold">TIEMPO DE EXPOSICIÓN</h1>
                            <p class="w-11/12 text-justify">Escribe el número de vinculados</p>
                            <div class="w-full mt-2 ">
                                <input type="number" id="" class="w-11/12 border-0 border-b focus:border-b-green-500 shadow-sm shadow-slate-400 focus:rounded-t-xl focus:rounded-b-none rounded-full  focus:outline-none focus:ring-0">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</div>




