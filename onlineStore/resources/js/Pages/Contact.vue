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

                            <section id="info-section">
                                <div class="info-section">
                                    <div class="info-box">
                                        <h2>Donde estamos</h2>
                                        <p>Calle: Manuel Matheu n57-76</p>
                                        <p>Ciudad: 170138 Quito</p>
                                        <p>País: Ecuador</p>
                                    </div>
                                    <div class="info-box">
                                        <h2>Datos de contacto</h2>
                                        <p>Teléfono: (593-2) 241 4356 </p>
                                        <p>Teléfono: 099 116 5130</p>
                                        <p>Email: <a href="mailto:prueba@correo.com">prueba@correo.com</a></p>
                                    </div>
                                    <div class="info-box">
                                        <h2>Horario</h2>
                                        <p>Lunes a Domingo: 07:00 - 21:00</p>
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
                </div>
            </div>
        </div>

    </AppLayout>
</template>


<style scoped>
/*estilos pagina contacto */
/* estilos horario y ubicacion */
.info-section {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
}

.info-box {
    width: 30%;
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    margin: 10px;
}

.info-box h2 {
    margin-top: 0;
    font-weight: bold;
    color: #333;
}

.info-box p {
    margin-bottom: 10px;
    font-size: 16px;
    color: #666;
}

.info-box a {
    text-decoration: none;
    color: #337ab7;
}

.info-box a:hover {
    color: #23527c;
}

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
