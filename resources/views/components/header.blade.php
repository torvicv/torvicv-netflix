@if (Route::has('login'))
    <div class="mr-48">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <div class="flex min-w-max gap-x-4 items-center">
            <div class="flex items-center border border-white rounded-md px-2 relative">

                <x-icons.globe-alt :class="'pointer-events-none absolute icon-select'" :size=6></x-icons.globe-alt>
                <select id="countries"
                    class="focus:ring-0 focus:outline-0 focus:border-0 relative min-w-max bg-transparent outline-none pl-8 border-none border-0 p-1 pr-10">
                    <option class="absolute left-8" value="es" selected>Español</option>
                    <option class="absolute left-8" value="en">Inglés</option>
                </select>
            </div>
            <a class="flex min-w-max items-center bg-red-500 px-2 py-1 border border-red-500 rounded-md" href="{{ route('login') }}">
                Iniciar sesión
            </a>

        </div>
        @endauth
    </div>
@endif
