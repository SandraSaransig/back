<script>
export default {
    name: 'Basket'
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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cesta Compra
            </h2>
        </template>

        <div class="py-12">
            <div class=" bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white overflow-hidden  sm:rounded-lg">

                    <div class="container">

                        <div class="product-box">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Productos</h2>

                            <img src="product.jpg" alt="ProductImage" class="product-img">

                            <h2 class="product-title">Product Title</h2>

                            <p class="product-price">€45.50</p>

                        </div>

                        <div class="order-summary">

                            <h2 class="order-summary-title">Order Summary</h2>

                            <div class="order-summary-item">

                                <span>Subtotal</span>

                                <span>€65.00</span>

                            </div>

                            <div class="order-summary-item">

                                <span>Descuento</span>

                                <span>-€19.50</span>

                            </div>

                            <div class="order-summary-item">

                                <span>Gastos envío</span>

                                <span>€6.95</span>

                            </div>

                            <hr>

                            <div class="order-summary-item">

                                <span class="order-summary-total">Total</span>

                                <span class="order-summary-total">€52.45</span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="ampliar">
                    <br>
                    <a href="">Ver productos</a>
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
                                <li><a :href="route('contact')" :active="route().current('contact')">Contáctenos</a>
                                </li>
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

    </AppLayout>
</template>


<style scoped>
/* estilos  */
.body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}


/** estilos cesta compra */

.container {
    display: flex;
    gap: 20px;

}

.product-box {

    width: 300px;
    border: 1px solid #ccc;
    padding: 20px;
    padding-right: 80vh;
    margin-left: 20px;

}

.product-img {

    width: 100%;
    height: auto;

}

.product-title {

    font-weight: bold;
    margin-top: 10px;

}

.product-price {

    font-size: 18px;
    margin-top: 10px;

}

.order-summary {

    width: 400px;
    border: 1px solid #ccc;
    padding: 20px;
    margin-left: 15vh;

}

.order-summary-title {

    font-weight: bold;

    margin-bottom: 10px;

}

.order-summary-item {

    display: flex;

    justify-content: space-between;

    margin-bottom: 5px;

}

.order-summary-total {

    font-weight: bold;

    font-size: 18px;

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
