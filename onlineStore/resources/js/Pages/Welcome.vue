<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>

    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <!-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
            src="https://laravel.com/assets/img/welcome/background.svg" /> -->
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                                fill="currentColor" />
                        </svg>
                    </div>

                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                        </Link>


                        <template v-else>

                            <Link :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                            </Link>


                            <Link v-if="canRegister" :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                            </Link>

                        </template>
                    </nav>
                    <!-- Dentro del nav -->
                        <!-- <Link :href="route('bmw')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Inicio
                        </Link>

                        <Link :href="route('bmw')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        BMW
                        </Link>

                        <Link :href="route('mercedes')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Mercedes
                        </Link>

                        <Link :href="route('about')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Sobre Nosotros
                        </Link>

                        <Link :href="route('contact')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Contacto
                        </Link> -->


                </header>

                <main class="mt-6">
                    <div>
                        <!-- {{ $page.props }} -->


                    </div>
                    <div class="bg-white">
                        <div>
                            <!-- Mobile filter dialog   Off-canvas filters for mobile, show/hide based on off-canvas filters state.    -->
                            <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                                <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
                                <div class="fixed inset-0 bg-black bg-opacity-25"></div>

                                <div class="fixed inset-0 z-40 flex">
                                    <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
                                    <div
                                        class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
                                        <div class="flex items-center justify-between px-4">
                                            <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                                            <button type="button"
                                                class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                                                <span class="sr-only">Close menu</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                <div class="encabezado-img inset-0 -z-10 h-full w-full object-cover object-right md:object-center ">

                                    <h1>Repuestos Coche BMW y Mercedes</h1>
                                    <h4>Encuentra los repuestos de las marcas de lujo mas exclusivas en NombreEmpresa. ¡LLegamos lejos
                                        para satisfacer tus necesidades!</h4>
                                    </div>



                                <section aria-labelledby="products-heading" class="pb-24 pt-6">
                                     <!-- Presentacion empresa -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="acerca-de mx-auto max-w-7xl px-6 lg:px-8">
                    <h1 class="text-4xl tracking-tight sm:text-6xl">Acerca de</h1>
                    <h3>Nombre Empresa</h3>
                    <div class="descripcion acerda-de">
                        <img src="/images/em.jpeg" alt="foto-empresa">

                        <p class="mt-6 text-lg leading-8 text-black-300">
                            Es una empresa de respuestos de coche de marcas de lujo que tiene como objetivo llegar a un
                            público más amplio.
                            Nos especializamos en ofrecer una amplia gama de repuestos y accesoreios para coches de
                            marcas recocnocidas en el mercado de lujo.
                            Nuestro equipo está siempre dispuesto a brindar asesoramiento y asistencia personalizada a
                            nuestros clientes.
                            Nos enorgullece ofrecer un servicio excepcional y garantixzar la satisfaccion total de
                            nuestros clientes.
                            Si buscas repuestos de calidad para tu coche de lujo, no dudes en contactarnos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ir al Catalgo -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="titulo-catalogo ">
                    <h1>Catalogo</h1>
                </div>
                <div class="catalogo">
                    <div class="catalogo-bmw">
                        <h1><a :href="route('bmw')" :active="route().current('bmw')">BMW</a></h1>
                    </div>
                    <div class="catalogo-mercedes">
                        <h1><a :href="route('mercedes')" :active="route().current('mercedes')">Mercedes</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Servicios -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="servicios-contenedor p-6 bg-white border-b border-gray-200">
                    <section class="servicios ">
                        <h2>Servicios</h2>
                        <p>Descubre nuestros servicios</p>
                        <div class="servicios-columnas">
                            <div class="servicio">
                                <h3>Venta de repuestos de coches de marcas de lujo</h3>
                                <p>Entendemos lo importante que es recibir los repuestos lo más rápido posible. Por eso,
                                    ofrecemos un servicio de envío rápido y seguro para que puedas...</p>
                            </div>
                            <div class="servicio">
                                <h3>Envío rápido y seguro</h3>
                                <p>En Saransig, no solo vendemos repuestos de coches de marcas de lujo...</p>
                            </div>
                            <div class="servicio">
                                <h3>Asesoramiento experto</h3>
                                <p>Descripción del servicio adicional...</p>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
    <hr>

                                </section>
                            </main>
                        </div>
                    </div>


                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    <!-- Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }}) -->
                    <div class="footer-container">
                        <div class="footer-left">
                            <img src="logo.png" alt="empresa logo">
                            <ul>
                                <li><a :href="route('about')" :active="route().current('about')">
                                    Nosotros
                                </a></li>
                                <li><a href="#">Ética y cumplimiento</a></li>
                                <li>
                                    <a >Cambiar país/región España</a>
                                    <br>
                                    <select name="languages" id="languages">
                                        <option value="es">Español</option>
                                        <option value="en">Ingles</option>
                                    </select>
                                </li>

                            </ul>
                        </div>

                        <div class="footer-right">
                            <ul>
                                <li><a href="#">Contáctenos</a></li>
                                <li><a href="#">Servicio de atención al cliente</a></li>
                                <li><a href="#">Información sobre pedidos</a></li>
                                <li><a href="#">Cambios y devoluciones</a></li>


                            </ul>
                            <div class="social-media">
                                <img class="facebook" src="/images/fac.jpg" alt="facebook" />
                                <img class="insta" src="/images/insta.png" alt="instagram" />

                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</template>






<style scoped>
/* encabezado estilos */
.encabezado-img {
    background-image: url('/images/mb.jpg');
    height: 600px;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff
}

.encabezado-img h1 {
    font-size: 50px;
    font-weight: bold;
}

.encabezado-img p {
    font-size: 20px;
    font-weight: bold;
}


/* estilos presentacion de la empresa */
.acerca-de {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.acerca-de h1 {
    font-weight: bold;
    font-size: 20px;

}

.descripcion {
    display: flex;
    justify-content: space-between;
}

.descripcion p {
    text-align: justify;
    padding: 20px;

}

.descripcion img {
    margin: 10px;
    height: 300px;

}

/* estilos catalgog */

.titulo-catalogo h1 {
    text-align: center;
    font-size: 20px;
    font-weight: bold;

}

.catalogo {
    display: flex;
    justify-content: space-around;
}


.catalogo-bmw {
    background-image: url('/images/bmw.jpg');
    height: 300px;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
}

.catalogo-bmw h1 {
    font-size: 20px;
    font-weight: bold;
    color: #fff;
}

.catalogo-mercedes {
    background-image: url('/images/mercedes.jpeg');
    height: 300px;
    width: 100%;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.catalogo-mercedes h1 {
    font-size: 20px;
    font-weight: bold;
    color: #fff;
}


/* Estilo parte servicios */
.servicios {
    margin: 40px auto;
    padding: 20px;

}

.servicios h2 {
    font-size: 20px;
    margin-top: 0;
    font-weight: bold;
    text-align: center;
}

.servicios p {
    font-size: 16px;
    margin-bottom: 20px;
    text-align: center;
}

/* Estilos para las columnas */
.servicios-columnas {
    display: flex;
    justify-content: space-between;
}

.servicio {
    flex: 1;
    margin-right: 20px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.servicio:last-child {
    margin-right: 0;
}

.servicio h3 {
    font-size: 20px;
    margin-top: 0;
}

.servicio p {
    font-size: 16px;
    margin-bottom: 10px;
}

/* estilos footer */
footer {
    color: #000000;
    padding: 2rem 0;

}


.footer-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;

}


.footer-left,
.footer-right {
    flex: 1;

}


.footer-left img {
    width: 150px;
    margin-bottom: 1rem;

}


.footer-left ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-direction: column;

}


.footer-left li {
    margin-bottom: 0.5rem;

}


.footer-left a,
.footer-right a {

    color: #000000;
    text-decoration: none;

}


.footer-right ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-direction: column;

}


.footer-right li {
    margin-bottom: 0.5rem;

}


.social-media {
    display: flex;
    margin-top: 1rem;
    height: 30px;

}


.social-media a {
    color: #000000;
    font-size: 1.5rem;
    margin-right: 1rem;
    transition: color 0.2s;

}



</style>
