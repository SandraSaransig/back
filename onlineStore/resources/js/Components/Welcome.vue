<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <!-- Encabezado -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="encabezado-img inset-0 -z-10 h-full w-full object-cover object-right md:object-center ">
                    <h1>Repuestos Coche BMW y Mercedes</h1>
                    <h4>Encuentra los repuestos de las marcas de lujo mas exclusivas en NombreEmpresa. ¡LLegamos lejos
                        para satisfacer tus necesidades!</h4>
                </div>
            </div>
        </div>
    </div>

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
                </div>
            </div>

    </footer>


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
