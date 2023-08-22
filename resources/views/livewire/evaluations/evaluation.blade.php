<style>
    #contentEval{
        overflow-y: scroll;
        scroll-margin: 20px;
    }
    #contentEval::-webkit-scrollbar{
        background: none;
        width: 10px;
        right: 10px;
    }
    #contentEval::-webkit-scrollbar-thumb {
        background: #50A44E;
        border-radius: 10px;
    }
    #contentEval::-webkit-scrollbar-track-piece{
        margin: 20px 0;
    }
</style>
<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <div id="contentEval" class="bg-gray-100 w-4/5 h-full mx-auto rounded-lg py-5 px-20 shadow-lg shadow-gray-600">
        <div class="grid grid-cols-12 align-middle gap-4 font-semibold text-lg">
            <label for="buscarEmp" class="bg-gray-300 col-span-2 rounded-lg flex items-center justify-center w-full h-full">Buscar empresa</label>
            <input class="col-span-7 h-10 rounded-lg border-none bg-gray-300" placeholder="Nit example: 45740-8626" type="text" name="" id="buscarEmp">
            <div class="bg-gray-300  col-span-1 rounded-lg flex align-middle justify-center">
                <button class="w-full h-full">Buscar</button>
            </div>
            <div class="bg-green-600 col-span-2 rounded-lg flex align-middle justify-center">
                <button class="text-gray-100  w-full h-full">Registrar Empresa</button>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-8 mt-10">
            @for ($i = 0; $i < 30; $i++)
                <a href="#" class="bg-gray-300 p-3 rounded-lg">
                    <h1 class="bg-green-600 p-1 mb-2 font-semibold text-lg rounded-lg w-5/6 mx-auto text-left text-gray-100">Nombre empresa</h1>
                    <div class="mx-3">
                        <h1>Nit empresa</h1>
                        <h1>Correo empresa</h1>
                        <h1>Ciudad</h1>
                        <h1>Direct-workers: N</h1>
                        <h1>Indirect-workers: N</h1>
                    </div>
                </a>
            @endfor
        </div>
    </div>
</div>
