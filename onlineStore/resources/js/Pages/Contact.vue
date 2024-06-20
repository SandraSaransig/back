<script>
export default {
    name: 'Contact'
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'
import { Inertia } from '@inertiajs/inertia'






</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Contacto</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="body mx-auto max-w-7xl px-6 lg:px-8">
                        <main>
                            <div class="fh-section-title clearfix text-center">
                                <h1 class="titulo">Contacta Con Nosotros</h1>
                            </div>
                            <section class="container">
                                <div class="row">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column_inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid contact-container">
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="fh-contact-box contact-box">
                                                                    <div class="info">
                                                                        <h2>Donde estamos</h2>
                                                                        <p>
                                                                            <span class="info-title">Calle:</span>
                                                                            <span class="info-details">Manuel Matheu
                                                                                n57-76</span>
                                                                        </p>
                                                                        <p>
                                                                            <span class="info-title">Ciudad:</span>
                                                                            <span class="info-details">170138
                                                                                Quito</span>
                                                                        </p>
                                                                        <p>
                                                                            <span class="info-title">País:</span>
                                                                            <span class="info-details">Ecuador</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="fh-contact-box contact-box">
                                                                    <div class="info">
                                                                        <h2>Datos de contacto</h2>
                                                                        <p>
                                                                            <span class="info-title">Teléfono:</span>
                                                                            <span class="info-details">(593-2) 241
                                                                                4356</span>
                                                                        </p>
                                                                        <p>
                                                                            <span class="info-title">Teléfono:</span>
                                                                            <span class="info-details">099 116
                                                                                5130</span>
                                                                        </p>
                                                                        <p>
                                                                            <span class="info-title">Email:</span>
                                                                            <span class="info-details"><a
                                                                                    href="mailto:prueba@correo.com">prueba@correo.com</a></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="fh-contact-box contact-box">
                                                                    <div class="info">
                                                                        <h2>Horario</h2>
                                                                        <p>
                                                                            <span class="info-title">Lunes a
                                                                                Domingo:</span>
                                                                            <span class="info-details">07:00 -
                                                                                21:00</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="form-section">
                                <h2>Déjanos Un Mensaje</h2>
                                <form class="contact-form">
                                    <div class="form-columns">
                                        <div class="form-column form-column-left">
                                            <div class="form-group">
                                                <label for="name">Tu nombre:</label>
                                                <input type="text" id="name" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Tu correo electrónico:</label>
                                                <input type="email" id="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Tu teléfono:</label>
                                                <input type="tel" id="phone" name="phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="subject">Asunto:</label>
                                                <input type="text" id="subject" name="subject">
                                            </div>
                                        </div>
                                        <div class="form-column form-column-right">
                                            <div class="form-group">
                                                <label for="message">Deja tu mensaje:</label>
                                                <textarea id="message" name="message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <input type="submit" value="Enviar ahora">
                                    </div>
                                </form>
                            </section>

                            <section id="map">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <h2>Cómo llegar</h2>
                                                            <p>
                                                                <iframe
                                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.807651436617!2d-78.48644052316997!3d-0.1325015998661915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d58fa0df1ea47f%3A0xefbac7dd50328c80!2sCarlitosco%20Importaciones!5e0!3m2!1ses!2ses!4v1716450522363!5m2!1ses!2ses"
                                                                    width="100%" height="100%" style="border:0;"
                                                                    allowfullscreen="" loading="lazy"
                                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </main>

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
                                                <li><a href="#">Cambiar país/región España</a></li>

                                            </ul>
                                        </div>

                                        <div class="footer-right">
                                            <ul>
                                                <li><a :href="route('contact')"
                                                        :active="route().current('contact')">Contáctenos</a></li>
                                                <li><a href="#">Servicio de atención al cliente</a></li>
                                                <li><a href="#">Información sobre pedidos</a></li>
                                                <!-- <li><a href="#">Cambios y devoluciones</a></li> -->
                                                <li>
                                                    <a>Cambiar país/región España</a>
                                                    <br>
                                                    <select name="languages" id="languages">
                                                        <option value="es">Español</option>
                                                        <option value="en">Ingles</option>
                                                    </select>
                                                </li>

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
                </div>
            </div>
        </div>

    </AppLayout>
</template>


<style scoped>
/*estilos pagina contacto */
/* estilos horario y ubicacion */

.titulo {
    font-size: 20px;
    font-weight: bold;
}

.contact-box {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    box-sizing: border-box;
}

.info-title {
    font-weight: bold;
}

.info-details {
    margin-left: 5px;
}

.contact-container {
    display: flex;
    flex-wrap: wrap;
    /* Permite que los elementos hijos se envuelvan */
    justify-content: space-between;
}

.contact-column {
    flex: 1 1 calc(33.333% - 20px);
    /* Toma un tercio del ancho disponible menos el margen */
    max-width: calc(33.333% - 20px);
    box-sizing: border-box;
}

@media (max-width: 768px) {
    .contact-column {
        flex: 1 1 calc(50% - 20px);
        /* Toma la mitad del ancho disponible menos el margen */
        max-width: calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .contact-column {
        flex: 1 1 100%;
        /* Toma el 100% del ancho disponible */
        max-width: 100%;
    }
}


/*
.contact-box {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    flex: 1;
    box-sizing: border-box;
}


.info-title {
    font-weight: bold;
}

.info-details {
    margin-left: 5px;
}


.contact-container {
    display: flex;
    justify-content: space-between;
}

.contact-column {
    flex: 1 1 calc(33.333% - 20px);
    max-width: calc(33.333% - 20px);
    box-sizing: border-box;
}

@media (max-width: 768px) {
    .contact-column {
        flex: 1 1 calc(50% - 20px);
        max-width: calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .contact-column {
        flex: 1 1 100%;
        max-width: 100%;
    }
} */



/* estilos formulario contacto */

.form-section {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.contact-form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-columns {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.form-column {
    flex: 1;
}

.form-column-left {
    margin-right: 20px;
}

.form-group {
    margin-bottom: 10px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
    width: 100%;
}

.form-submit {
    margin-top: 20px;
    text-align: center;
}

.form-submit input[type="submit"] {
    width: 100%;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #3069d4;
    color: #fff;
    cursor: pointer;
}

.form-submit input[type="submit"]:hover {
    background-color: #2a55a7;
}

/* Media queries para hacer que el formulario sea responsivo */
@media (max-width: 768px) {
    .form-columns {
        flex-direction: column;
    }

    .form-column {
        margin-right: 0;
    }

    .form-column-right {
        margin-top: 20px;
    }
}


/* estilo mapa */
.container-fluid {
    margin-right: auto;
    margin-left: auto;
}

.row {
    margin-right: -15px;
    margin-left: -15px;
}

.vc_column_container {
    padding-left: 0;
    padding-right: 0;
    width: 100%;
}

.vc_column_container>.vc_column-inner {
    box-sizing: border-box;
    padding-left: 15px;
    padding-right: 15px;
    width: 100%;
}

.vc_column-inner {
    padding-top: 0;
}

.wpb_content_element {
    margin-bottom: 35px;
}


@media (max-width: 768px) {

    #map li {

        flex-basis: calc(50% - 1rem);

    }

}


@media (max-width: 500px) {

    #map li {

        flex-basis: 100%;

    }

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
