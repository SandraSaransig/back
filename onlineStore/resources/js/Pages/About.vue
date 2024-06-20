<script>
export default {
    name: 'About'
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'
import { Inertia } from '@inertiajs/inertia'
import { Head } from '@inertiajs/vue3'





</script>

<template>
    <AppLayout>
        <template #header>
            <div class="encabezado">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">Sobre nosotros</h1>

            </div>
        </template>


        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="body mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="descripcion acerda-de">
                            <img src="/images/em.jpeg" alt="foto-empresa">

                            <p class="mt-6 text-lg leading-8 text-black-300">
                                Es una empresa de respuestos de coche de marcas de lujo que tiene como objetivo
                                llegar a un
                                público más amplio.
                                Nos especializamos en ofrecer una amplia gama de repuestos y accesoreios para coches
                                de
                                marcas recocnocidas en el mercado de lujo.
                                Nuestro equipo está siempre dispuesto a brindar asesoramiento y asistencia
                                personalizada a
                                nuestros clientes.
                                Nos enorgullece ofrecer un servicio excepcional y garantixzar la satisfaccion total
                                de
                                nuestros clientes.
                                Si buscas repuestos de calidad para tu coche de lujo, no dudes en contactarnos.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="titulo-valores">
                            <h2>Valores</h2>
                            <span>Como empresa actuamos según estos tres valores:</span>
                            <div class="valores">

                                <ul>
                                    <li>
                                        Clientes
                                        <span>Compromiso</span>
                                    </li>
                                    <hr>
                                    <li>
                                        Calidad
                                        <span>Ambicion</span>
                                    </li>
                                    <hr>
                                    <li>
                                        Integridad
                                        <span>Compromiso</span>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="servicios-contenedor p-6 bg-white border-b border-gray-200">
                        <section class="servicios">
                            <h2>Por que destacamos</h2>
                            <div class="servicios-columnas">
                                <div class="servicio">
                                    <h3>Amplia seleccion de repuestos de marca de lujo</h3>
                                    <span>
                                        Ofrecemos una amplia gamma de repuestos para coches de marca de lujo, asegurando
                                        que
                                        nuestros clientes encuentran exactamente
                                        lo que necesitan para mantener sus vehículos en óptimas condiciones.
                                    </span>
                                </div>
                                <div class="servicio">
                                    <h3>Calidad garantizada</h3>
                                    <span>
                                        Todos nuestros repuestos son de las mas alta calidad y estan garantizados para fucionar de manera eficiente y duradera.
                                    </span>
                                </div>
                                <div class="servicio">
                                    <h3>Envío rápido y seguro</h3>
                                    <span>
                                        Nos comprometemos a brindar un servicio de envío rápido y seguro para que nuestros clientes reciban sus repuestos en
                                        el menor tiempo posible.
                                    </span>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>


            <!-- Footer -->
            <footer class="py-16 text-sm text-black">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="footer-container">
                            <div class="footer-left">
                                <img src="logo.png" alt="empresa logo">
                                <ul>
                                    <li><a :href="route('about')" :active="route().current('about')">
                                            Nosotros
                                        </a></li>
                                    <li><a href="#">Ética y cumplimiento</a></li>
                                    <!-- <li><a href="#">Cambiar país/región España</a></li> -->
                                    <li>
                                    <a>Cambiar país/región España</a>
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
                                    <li><a :href="route('contact')" :active="route().current('contact')">Contáctenos</a></li>
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
                    </div>
                </div>

            </footer>


        </div>

    </AppLayout>
</template>


<style scoped>
/* esilos encabezado */
.encabezado {
    background-image: url('/images/mb.jpg');
    height: 600px;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

}

.encabezado h1 {
    font-size: 50px;
    font-weight: bold;
    color: #fff
}

/* estilos apartado descirpcion */
.body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
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

/* estilos valores */

.titulo-valores h2{
    font-size: 20px;
    font-weight: bold;
    text-align: center;
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
