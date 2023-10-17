<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <div id="contentEval"
            class="relative px-4 py-2 lg:w-[85vw] lg:h-[93.1vh] w-[100vw] h-[100vh] overflow-y-scroll overflow-x-hidden bg-gray-200 ">
            <div class="w-[78vw] mx-auto flex gap-6 my-10">
                <div class="w-full text-center">
                    <div class="relative bg-gray-500 rounded-t-md font-bold text-lg text-gray-100 py-2">
                        <div>NIVEL DE DEFICIENCIA</div>
                        @livewire('admin.parameter.edit-parameter')
                    </div>
                    <div class="grid grid-cols-12 font-semibold">
                        <div class="col-span-2 bg-gray-400 text-gray-100 p-1">Nivel de deficiencia</div>
                        <div class="flex items-center justify-center col-span-2 bg-gray-400 text-gray-100 p-1">Valor de ND</div>
                        <div class="flex items-center justify-center col-span-8 bg-gray-400 text-gray-100 p-1">Significado</div>
                    </div>
                    @foreach ($deficiencies as $deficiency)
                        <div class="grid grid-cols-12 text-left">
                            <div class="col-span-2 flex items-center justify-center px-2 py-1 border-b-2 border-l-2 border-gray-400 font-medium" style="background-color: {{ $deficiency->color }}">{{$deficiency->name}} ({{$deficiency->prefix}})</div>
                            <div class="col-span-2 flex items-center justify-center bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$deficiency->value}}</div>
                            <div class="col-span-8 bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$deficiency->meaning}}</div>
                        </div>
                    @endforeach
                </div>
                <div class="w-full text-center">
                    <div class="relative bg-gray-500 rounded-t-md font-bold text-lg text-gray-100 py-2">
                        <div>NIVEL DE EXPOSICION</div>
                        @livewire('admin.parameter.edit-parameter')
                    </div>
                    <div class="grid grid-cols-12 font-semibold">
                        <div class="col-span-3 bg-gray-400 text-gray-100 p-1">Nivel de exposicion</div>
                        <div class="col-span-2 flex items-center justify-center bg-gray-400 text-gray-100 p-1">Valor de ND</div>
                        <div class="col-span-7 flex items-center justify-center bg-gray-400 text-gray-100 p-1">Significado</div>
                    </div>
                    @foreach ($exposures as $exposure)
                        <div class="grid grid-cols-12 text-left">
                            <div class="col-span-3 flex items-center justify-center px-2 py-1 border-b-2 border-l-2 border-gray-400 font-medium" style="background-color: {{ $exposure->color }}">{{$exposure->name}} ({{$exposure->prefix}})</div>
                            <div class="col-span-2 flex items-center justify-center bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$exposure->value}}</div>
                            <div class="col-span-7 bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$exposure->meaning}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-[78vw] mx-auto flex gap-6 mb-10">
                <div class="w-full text-center">
                    <div class="relative bg-gray-500 rounded-t-md font-bold text-lg text-gray-100 py-2">
                        <div>NIVEL DE PROBABILIDAD</div>
                        @livewire('admin.parameter.edit-parameter')
                    </div>
                    <div class="grid grid-cols-12 font-semibold">
                        <div class="col-span-2 bg-gray-400 text-gray-100 p-1">Nivel de deficiencia</div>
                        <div class="flex items-center justify-center col-span-2 bg-gray-400 text-gray-100 p-1">Valor de ND</div>
                        <div class="flex items-center justify-center col-span-8 bg-gray-400 text-gray-100 p-1">Significado</div>
                    </div>
                    @foreach ($probabilities as $probability)
                        <div class="grid grid-cols-12 text-left">
                            <div class="col-span-2 flex items-center justify-center px-2 py-1 border-b-2 border-l-2 border-gray-400 font-medium" style="background-color: {{ $probability->color }}">{{$probability->name}} ({{$probability->prefix}})</div>
                            <div class="col-span-2 flex items-center justify-center bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$probability->value}}</div>
                            <div class="col-span-8 bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$probability->meaning}}</div>
                        </div>
                    @endforeach
                </div>
                <div class="w-full text-center">
                    <div class="relative bg-gray-500 rounded-t-md font-bold text-lg text-gray-100 py-2">
                        <div>NIVEL DE CONSECUENCIA</div>
                        @livewire('admin.parameter.edit-parameter')
                    </div>
                    <div class="grid grid-cols-12 font-semibold">
                        <div class="col-span-4 bg-gray-400 text-gray-100 p-1">Nivel de exposicion</div>
                        <div class="col-span-2 flex items-center justify-center bg-gray-400 text-gray-100 p-1">Valor de ND</div>
                        <div class="col-span-6 flex items-center justify-center bg-gray-400 text-gray-100 p-1">Significado</div>
                    </div>
                    @foreach ($consequences as $consequence)
                        <div class="grid grid-cols-12 text-left">
                            <div class="col-span-4 flex items-center justify-center px-2 py-1 border-b-2 border-l-2 border-gray-400 font-medium" style="background-color: {{ $consequence->color }}">{{$consequence->name}} ({{$consequence->prefix}})</div>
                            <div class="col-span-2 flex items-center justify-center bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$consequence->value}}</div>
                            <div class="col-span-6 bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$consequence->meaning}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-[78vw] mx-auto flex gap-6 mb-10">
                <div class="w-full text-center">
                    <div class="relative bg-gray-500 rounded-t-md font-bold text-lg text-gray-100 py-2">
                        <div>NIVEL DE RIESGO</div>
                        @livewire('admin.parameter.edit-parameter')
                    </div>
                    <div class="grid grid-cols-12 font-semibold">
                        <div class="col-span-2 bg-gray-400 text-gray-100 p-1">Nivel de deficiencia</div>
                        <div class="flex items-center justify-center col-span-2 bg-gray-400 text-gray-100 p-1">Valor de ND</div>
                        <div class="flex items-center justify-center col-span-8 bg-gray-400 text-gray-100 p-1">Significado</div>
                    </div>
                    @foreach ($risks as $risk)
                        <div class="grid grid-cols-12 text-left">
                            <div class="col-span-2 flex items-center justify-center px-2 py-1 border-b-2 border-l-2 border-gray-400 font-medium" style="background-color: {{ $risk->color }}">{{$risk->name}}</div>
                            <div class="col-span-2 flex items-center justify-center bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$risk->value}}</div>
                            <div class="col-span-8 bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$risk->meaning}}</div>
                        </div>
                    @endforeach
                </div>
                <div class="w-full text-center">
                    <div class="relative bg-gray-500 rounded-t-md font-bold text-lg text-gray-100 py-2">
                        <div>ACEPTABILIDAD DEL RIESGO</div>
                        @livewire('admin.parameter.edit-parameter')
                    </div>
                    <div class="grid grid-cols-12 font-semibold">
                        <div class="col-span-4 bg-gray-400 text-gray-100 p-1">Nivel de exposicion</div>
                        <div class="col-span-8 flex items-center justify-center bg-gray-400 text-gray-100 p-1">Significado</div>
                    </div>
                    @foreach ($acceptabilities as $acceptability)
                        <div class="grid grid-cols-12 text-left">
                            <div class="col-span-4 flex items-center justify-center px-2 py-1 border-b-2 border-l-2 border-gray-400 font-medium" style="background-color: {{ $acceptability->color }}">{{$acceptability->name}}</div>
                            <div class="col-span-8 bg-white px-2 py-1 border-2 border-t-0 border-l-0 border-gray-400">{{$acceptability->meaning}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</div>
