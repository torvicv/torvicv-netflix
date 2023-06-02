<x-layouts.guest>
    <x-slot:title>
        Inicio
    </x-slot:title>
    <x-slot:content>
        <div class="flex items-center z-20 relative h-[66.666667%]">
            <div class="w-full text-white">
                <div class="absolute h-calc-7 top-[-7rem]">
                    <img src="{{ asset('storage/images/background_netflix1.png') }}" class="h-full top-0 z-0">
                </div>
                <div class="flex justify-center items-center w-full  h-full flex-col">
                    <div class="text-5xl font-black my-4">
                        Series, películas y más… ilimitadas
                    </div>
                    <div class="text-2xl my-4">
                        Disfruta donde quieras. Cancela cuando quieras.
                    </div>
                    <div class="text-xl my-4">
                        ¿Quieres ver algo ya? Escribe tu dirección de correo para crear una suscripción a Netflix o
                        reactivarla.
                    </div>
                    <div class="w-full">
                        <form action="#" method="post" class="flex gap-x-2 w-full justify-center">
                            <input
                                class="bg-[#000000AA] focus:ring-1 focus:border-0 focus:ring-white outline-1 outline-gray-400 text-grey-400 p-4 rounded-md w-1/4"
                                type="text" name="email" id="email" placeholder="Dirección de correo" />
                            <span class="bg-red-600 py-3 px-4 rounded-md text-2xl flex items-center">
                                <input type="submit" value="Empezar" />
                                <x-icons.chevron-right :size="8"></x-icons.chevron-right>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 translate-y-[50%] w-full flex justify-center z-20">
                <div class="home-netflix-bg-gradient w-11/12 p-6 flex justify-center gap-4">
                    <div>
                        <img src="{{ asset('storage/images/popcorns-netflix.png') }}" alt="">
                    </div>
                    <div class="text-white font-bold">
                        <p class="text-xl p-1">Todo lo que te encanta de Netflix por sólo 5,49 €.</p>
                        <p class="text-lg p-1">Consigue el plan Estándar de anuncios.</p>
                        <div class="p-1 text-lg">
                            <a href="" class="text-blue-500 flex items-center">
                                <span class="underline">Más información </span>
                                <span>
                                    <x-icons.chevron-right :size="8"></x-icons.chevron-right>
                                </span>
                            </a>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex items-center min-h-[66.666667%] bg-black z-10 relative border-b-8 border-gray-600">
            <div class="flex items-end h-full justify-center gap-20">
                <div class="self-center text-white w-2/6">
                    <h3 class="font-black text-5xl mb-4">Disfruta en tu tele</h3>
                    <p class="text-2xl">Smart TV, Playstation, Xbox, Chromecast, Apple TV, reproductores Blu-ray y
                        muchos más.</p>
                </div>
                <div class="relative">
                    <video src="{{ asset('storage/video/enjoy.mov') }}" class="absolute top-[1rem] left-[6rem] w-[73%]"
                        loop autoplay muted></video>
                    <img src="{{ asset('storage/images/computer-netflix.png') }}" alt="imagen ordenador">
                </div>
            </div>
        </div>
        <div class="flex items-center w-full min-h-[66.666667%] bg-black z-10 relative border-b-8 border-gray-600">
            <div class="flex items-center h-full justify-center gap-20">
                <div class="relative">
                    <video src="{{ asset('storage/video/device.mov') }}"
                        class="z-[-1] absolute top-[3rem] left-[8rem] w-[65%]" loop autoplay muted></video>
                    <img src="{{ asset('storage/images/computer2-netflix.png') }}" alt="imagen ordenador"
                        class="z-10">
                </div>
                <div class="self-center text-white w-2/6">
                    <h3 class="font-black text-5xl mb-4">Usa cualquier dispositivo</h3>
                    <p class="text-2xl">Ve en streaming todas las películas y series en tu móvil, tableta, ordenador y
                        televisor.</p>
                </div>
            </div>
        </div>
        <div class="flex items-center w-full min-h-[66.666667%] bg-black z-10 relative border-b-8 border-gray-600">
            <div class="flex items-center h-full justify-center gap-20">
                <div class="relative">
                    <video src="{{ asset('storage/video/download.mov') }}"
                        class="absolute bottom-[6.8rem] right-[3.3rem] w-fit h-[3rem]" loop autoplay muted></video>
                    <img src="{{ asset('storage/images/netflix-4.png') }}" alt="imagen ordenador" class="">
                </div>
                <div class="self-center text-white w-2/6">
                    <h3 class="font-black text-5xl mb-4">Descárgate tus favoritas para verlas sin conexión</h3>
                    <p class="text-2xl">Solo disponible en los planes sin anuncios.</p>
                </div>
            </div>
        </div>
        <div class="w-full min-h-fit bg-black z-10 relative text-white border-b-8 border-gray-600">
            <div class="flex justify-center items-center flex-col w-full">
                <h2 class="font-black text-5xl mt-16 flex justify-center">Preguntas Frecuentes</h2>
                <ul id="accordion-flush" data-accordion="collapse" data-active-classes="bg-neutral-600 text-white" class="font-bold text-2xl w-5/6 mt-6 flex flex-col gap-2">
                    <li class="bg-neutral-600">
                        <button id="accordion-flush-heading-1" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1" class="hover:bg-neutral-400 flex justify-between items-center w-full">
                            <span class="p-6 text-white">¿Qué es Netflix?</span>
                            <x-icons.plus :class="'mr-4 h-[3rem] w-[3rem] text-white'"></x-icons.plus>
                        </button>
                        <div id="accordion-flush-body-1" class="mt-2 hidden p-4 text-white" aria-labelledby="accordion-flush-heading-1">
                            <p class="mb-2">Netflix es un servicio de streaming que ofrece una amplia variedad de series, películas, títulos de anime, documentales y otros contenidos premiados en miles de dispositivos conectados a internet.</p>
                            <p class="">Puedes ver todo lo que quieras, cuando quieras, por una tarifa mensual reducida. ¡Siempre hay algo nuevo que descubrir, y cada semana se añaden nuevas series y películas!</p>
                        </div>
                    </li>
                    <li class="bg-neutral-600">
                        <button data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2" class="hover:bg-neutral-400 flex justify-between items-center w-full">
                            <span class="p-6 text-white">¿Cuánto cuesta Netflix?</span>
                            <x-icons.plus :class="'mr-4 h-[3rem] w-[3rem] text-white'"></x-icons.plus>
                        </button>
                        <div id="accordion-flush-body-2" class="hidden p-4 text-white" aria-labelledby="accordion-flush-heading-2">
                            <p class="mb-2">Disfruta de Netflix en tu smartphone, tableta, Smart TV, ordenador o dispositivo de streaming, todo por una tarifa mensual fija. Planes desde 5,49 € a 17,99 € al mes. Sin cargos adicionales ni contratos.</p>
                        </div>
                    </li>
                    <li class="bg-neutral-600">
                        <button data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3" class="hover:bg-neutral-400 flex justify-between items-center w-full">
                            <span class="p-6 text-white">¿Dónde puedo ver Netflix?</span>
                            <x-icons.plus :class="'mr-4 h-[3rem] w-[3rem] text-white'"></x-icons.plus>
                        </button>
                        <div id="accordion-flush-body-3" class="hidden p-4 text-white" aria-labelledby="accordion-flush-heading-3">
                            <p class="mb-2">Disfruta donde quieras y cuando quieras. Inicia sesión con tu cuenta de Netflix para disfrutar al instante de todo el contenido de netflix.com desde tu ordenador personal o en cualquier dispositivo conectado a internet que ofrezca la aplicación de Netflix, entre ellos, smart TV, smartphones, tabletas, reproductores multimedia de streaming y consolas de juegos.</p>
                            <p class="mb-2">También puedes descargar tus series favoritas con la aplicación de iOS, Android o Windows 10. Utiliza las descargas para ver títulos dondequiera que vayas y cuando no dispongas de conexión a internet. Netflix siempre te acompaña.</p>
                        </div>
                    </li>
                    <li class="bg-neutral-600">
                        <button data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4" class="hover:bg-neutral-400 flex justify-between items-center w-full">
                            <span class="p-6 text-white">¿Cómo cancelo?</span>
                            <x-icons.plus :class="'mr-4 h-[3rem] w-[3rem] text-white'"></x-icons.plus>
                        </button>
                        <div id="accordion-flush-body-4" class="hidden p-4 text-white" aria-labelledby="accordion-flush-heading-4">
                            <p class="mb-2">Netflix es flexible. Sin contratos liosos ni compromisos. Puedes cancelar fácilmente tu cuenta en línea con tan solo dos clics. Sin cargos por cancelación: activa o cancela tu cuenta en cualquier momento.</p>
                        </div>
                    </li>
                    <li class="bg-neutral-600">
                        <button data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5" class="hover:bg-neutral-400 flex justify-between items-center w-full">
                            <span class="p-6 text-white">¿Qué puedo ver en Netflix?</span>
                            <x-icons.plus :class="'mr-4 h-[3rem] w-[3rem] text-white'"></x-icons.plus>
                        </button>
                        <div id="accordion-flush-body-5" class="hidden p-4 text-white" aria-labelledby="accordion-flush-heading-5">
                            <p class="mb-2">Netflix dispone de una amplia biblioteca de originales de Netflix galardonados, títulos de anime, series de TV, documentales, largometrajes y otros contenidos. Ve todo el contenido que quieras, cuando quieras.</p>
                        </div>
                    </li>
                    <li class="bg-neutral-600">
                        <button data-accordion-target="#accordion-flush-body-6" aria-expanded="false" aria-controls="accordion-flush-body-6" class="hover:bg-neutral-400 flex justify-between items-center w-full">
                            <span class="p-6 text-white">¿Es Netflix bueno para los niños?</span>
                            <x-icons.plus :class="'mr-4 h-[3rem] w-[3rem] text-white'"></x-icons.plus>
                        </button>
                        <div id="accordion-flush-body-6" class="hidden p-4 text-white" aria-labelledby="accordion-flush-heading-6">
                            <p class="mb-2">La experiencia infantil de Netflix se incluye en la suscripción para que los padres tengan el control mientras los niños disfrutan de series y películas familiares en su propio espacio.</p>
                            <p class="mb-2">Los perfiles infantiles incluyen controles parentales protegidos por PIN que te permiten restringir la calificación por edades del contenido que pueden ver los niños y bloquear determinados títulos que no quieras que vean.</p>
                        </div>
                    </li>
                </ul>
                <p class="mt-12 text-xl">¿Quieres ver algo ya? Escribe tu dirección de correo para crear una suscripción a Netflix o reactivarla.</p>
                <div class="w-full mt-4 mb-16">
                    <form action="#" method="post" class="flex gap-x-2 w-full justify-center">
                        <input
                            class="bg-[#4b556380] focus:ring-1 focus:border-0 focus:ring-white outline-1 outline-gray-400 text-grey-800 p-4 rounded-md w-1/4"
                            type="text" name="email" id="email" placeholder="Dirección de correo" />
                        <span class="bg-red-600 py-3 px-4 rounded-md text-2xl flex items-center">
                            <input type="submit" value="Empezar" />
                            <x-icons.chevron-right :size="8"></x-icons.chevron-right>
                        </span>
                    </form>
                </div>
            </div>
        </div>
        <footer class="relative bg-black text-white">
            <div class="m-auto py-16 w-5/6">
                <p class="font-bold text-lg">¿Preguntas? Llama al 900-759-106</p>
                <ul class="grid grid-cols-4 underline gap-y-4 text-sm mt-8">
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Centro de ayuda</a></li>
                    <li><a href="#">Cuenta</a></li>
                    <li><a href="#">Zona de prensa</a></li>
                    <li><a href="#">Inversores</a></li>
                    <li><a href="#">Empleo</a></li>
                    <li><a href="#">Canjear tarjetas regalo</a></li>
                    <li><a href="#">Comprar tarjetas regalo</a></li>
                    <li><a href="#">Formas de ver</a></li>
                    <li><a href="#">Términos de uso</a></li>
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="#">Preferencias de cookies</a></li>
                    <li><a href="#">Información corporativa</a></li>
                    <li><a href="#">Contáctanos</a></li>
                    <li><a href="#">Prueba de velocidad</a></li>
                    <li><a href="#">Garantía legal</a></li>
                    <li><a href="#">Avisos legales</a></li>
                    <li><a href="#">Solo en Netflix</a></li>
                </ul>
                <div class="mt-6 flex items-center border border-white rounded-md px-2 relative w-fit">
                    <x-icons.globe-alt :class="'pointer-events-none absolute icon-select'" :size=6></x-icons.globe-alt>
                    <select id="countries"
                        class="focus:ring-0 focus:outline-0 focus:border-0 relative min-w-max bg-transparent outline-none pl-8 border-none border-0 p-1 pr-10">
                        <option class="absolute left-8" value="es" selected>Español</option>
                        <option class="absolute left-8" value="en">Inglés</option>
                    </select>
                </div>
                <div class="mt-6 mb-12 text-sm">
                    Netflix España
                </div>
            </div>
        </footer>
    </x-slot:content>
</x-layouts.guest>
