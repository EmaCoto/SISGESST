<x-guest-layout>
    <div class="flex flex-col h-screen">
        {{-------------------------------- NAVEGATION BAR ---------------------------------}}
        <x-navbar-index/>

        <main class="flex-grow flex">
            <aside class="w-[15vw]">
                <div class="px-3 h-[91.8vh] py-4 overflow-y-auto bg-[#EEEFF1]">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg group hover:bg-black hover:bg-opacity-50">
                                <i class="fa-solid fa-user-group group-hover:text-white"></i>
                                <span class="group-hover:text-white ml-3">Evaluadores</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg group hover:bg-black hover:bg-opacity-50">
                                <i class="fa-solid fa-user-group"></i>
                                <span class="group-hover:text-white ml-3">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg group hover:bg-black hover:bg-opacity-50">
                                <i class="fa-solid fa-user-group"></i>
                                <span class="group-hover:text-white ml-3">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg group hover:bg-black hover:bg-opacity-50">
                                <i class="fa-solid fa-user-group"></i>
                                <span class="group-hover:text-white ml-3">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg group hover:bg-black hover:bg-opacity-50">
                                <i class="fa-solid fa-user-group"></i>
                                <span class="group-hover:text-white ml-3">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg group hover:bg-black hover:bg-opacity-50">
                                <i class="fa-solid fa-user-group"></i>
                                <span class="group-hover:text-white ml-3">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg group hover:bg-black hover:bg-opacity-50">
                                <i class="fa-solid fa-user-group"></i>
                                <span class="group-hover:text-white ml-3">Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div id="contentEval" class="relative px-4 py-2 w-[85vw] h-[91.8vh] overflow-y-scroll">

            </div>
        </main>
    </div>
</x-guest-layout>


