<div class="z-10 grid grid-cols-3 w-full justify-between items-center h-20 px-4 py-2 sticky top-0 navbar border-none">
    <div class="flex">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-16">
        <p class="py-[10px] text-teal-400 px-3 text-3xl font-extrabold">SISGESST</p>
    </div>
    <div class="text-center font-semibold">
        <a href="#" class="px-10 py-[31px] focus:underline focus:underline-2 focus:rounded-sm active:outline-green-200">Inicio</a>
        <a href="#" class="px-10 py-[31px] focus:underline focus:underline-2 focus:rounded-sm active:outline-green-200">Ayuda</a>
        <a href="#" class="px-10 py-[31px] focus:underline focus:underline-2 focus:rounded-sm active:outline-green-200">Contáctenos</a>
    </div>
    <div>
        @if (Route::has('login'))
            <div class="sm:sticky sm:top-0 sm:right-0 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold focus:underline focus:underline-2 focus:rounded-sm active:outline-green-100 px-4 py-[31px]">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold focus:underline focus:underline-2 focus:rounded-sm active:outline-green-100 px-4 py-[31px]">Iniciar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold focus:underline focus:underline-2 focus:rounded-sm active:outline-green-100 px-4 py-[31px]">Regristrarse</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <script>
        // Obtén la barra de navegación
        const navbar = document.querySelector('.navbar');

        // Función para manejar el scroll
        function handleScroll() {
          if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
          } else {
            navbar.classList.remove('scrolled');
          }
        }

        // Escucha el evento de scroll
        window.addEventListener('scroll', handleScroll);
    </script>
</div>
