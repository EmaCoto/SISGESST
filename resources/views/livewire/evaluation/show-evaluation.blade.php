<div>
    <x-navbar-company :company="$company" />

    <div class="w-full overflow-hidden pb-7" style="height: 84vh">
        <x-content-block>
            <h1 class="bg-teal-600 p-1 mb-6 font-semibold text-2xl rounded-lg w-4/5 mx-auto text-center text-gray-100">
                Procesos evaluados
            </h1>

            <div class="bg-teal-600 rounded-t-lg flex text-center w-full text-gray-100">
                <div class="w-[2vw] py-1 text-center">#</div>
                <div class="w-[12vw] py-1">Task</div>
                <div class="w-[14vw] py-1">Task description</div>
                <div class="w-[10vw] py-1">Activity</div>
                <div class="w-[11vw] py-1">Process</div>
                <div class="w-[8vw] py-1">Evaluador</div>
                <div class="w-[8vw] py-1">Created date</div>
                <div class="w-[5vw] py-1">Acciones</div>
            </div>

            @for ($i = 1; $i <= 20; $i++)
                <div class="bg-white flex text-left w-full border-b-4 border-x-4 border-gray-300 items-center">
                    <div class="w-[2vw] py-1 text-center">{{$i}}</div>
                    <div class="w-[12vw] p-1">Lorem ipsum dolor sit amet, consectetur adipisicing minus voluptatum ducimus cupiditate voluptatem facilis!
                    </div>
                    <div class="w-[14vw] p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    <div class="w-[10vw] p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.</div>
                    <div class="w-[11vw] p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum
                        dolor sit amet, .</div>
                    <div class="w-[8vw] p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    <div class="w-[8vw] p-1 text-center">2023-12-12</div>
                    <div class="w-[5vw] p-1">Descargar / Ver</div>
                </div>
            @endfor
        </x-content-block>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>
