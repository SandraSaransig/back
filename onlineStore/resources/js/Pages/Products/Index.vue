<script>
export default {
    name: 'ProductsIndex',
    props: ['products']
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'
import { Inertia } from '@inertiajs/inertia'

defineProps({
    products: {
        type: Object,
        required: true
    }
})

//funcion eliminar producto
const deleteProduct = id => {
    if (confirm('¿Estás seguro?')) {
        Inertia.delete(route('products.destroy', id))
    }
}
</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" v-if="$page.props.user.permissions.includes('create products')">Productos</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between" v-if="$page.props.user.permissions.includes('create products')">
                        <Link :href="route('products.create')"
                            class="text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded"
                            v-if="$page.props.user.permissions.includes('create products')">
                            <!-- Enlace crear producto -->
                            CREAR PRODUCTO
                        </Link>
                    </div>

                    <div class="mt-4">
                        <ul role="list" class="divide-y divide-gray-100">
                            <li class="flex justify-between gap-x-6 py-5" v-for="product in products.data" :key="product.id">
                                <div class="flex min-w-0 gap-x-4">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-md font-semibold leading-6 text-gray-900">{{ product.name }}</p>
                                    </div>
                                </div>
                                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                    <p class="text-md leading-6 text-gray-900">
                                        <Link class="py-2 px-4" :href="route('products.edit', product.id)"
                                            v-if="$page.props.user.permissions.includes('update products')">Editar
                                        </Link>
                                        <Link class="py-2 px-4 text-red-600" @click="deleteProduct(product.id)"
                                            v-if="$page.props.user.permissions.includes('delete products')">Eliminar
                                        </Link>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Usuarios sin permisos -->
                    <!-- Prueba vista Categoria -->
                    <div class="bg-white">
                        <div>
                            <!-- Mobile filter dialog -->
                            <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                                <div class="fixed inset-0 bg-black bg-opacity-25"></div>
                                <div class="fixed inset-0 z-40 flex">
                                    <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
                                        <div class="flex items-center justify-between px-4">
                                            <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                                            <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                                                <span class="sr-only">Close menu</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- Filters -->
                                        <form class="mt-4 border-t border-gray-200">
                                            <div class="border-t border-gray-200 px-4 py-6">
                                                <h3 class="-mx-2 -my-3 flow-root">
                                                    <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-1" aria-expanded="false">
                                                        <span class="font-medium text-gray-900">Categoria</span>
                                                        <span class="ml-6 flex items-center">
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                                            </svg>
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </h3>
                                                <div class="pt-6" id="filter-section-mobile-1">
                                                    <div class="space-y-6">
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-gray-500">New Arrivals</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500">Sale</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500">Travel</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500">Organization</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-gray-500">Accessories</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                                    <h1 class="text-4xl font-bold tracking-tight text-gray-900">BMW</h1>

                                    <div class="flex items-center">
                                        <div class="relative inline-block text-left">
                                            <div>
                                                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                                    Sort
                                                    <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.06-1.06l.01.01a.75.75 0 01.02 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <section aria-labelledby="products-heading" class="pb-24 pt-6">
                                    <h2 id="products-heading" class="sr-only">Products</h2>

                                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                                        <!-- Filters -->
                                        <form class="hidden lg:block">
                                            <h3 class="sr-only">Categories</h3>
                                            <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                                                <li>
                                                    <a href="#">Todas</a>
                                                </li>

                                                <li>
                                                    <a href="#">Transmisión</a>
                                                </li>

                                                <li>
                                                    <a href="#">Suspensión y Dirección</a>
                                                </li>

                                                <li>
                                                    <a href="#">Filtros y Aceites</a>
                                                </li>

                                                <li>
                                                    <a href="#">Laptop Sleeves</a>
                                                </li>
                                            </ul>
                                        </form>

                                        <!-- Product grid -->
                                        <div class="lg:col-span-3">
                                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                                <div class="bg-white p-4 rounded-lg shadow" v-for="product in products.data" :key="product.id">
                                                    <img :src="product.image" alt="Product Image" class="w-full h-48 object-cover mb-4 rounded">
                                                    <h3 class="text-lg font-semibold mb-2">{{ product.name }}</h3>
                                                    <p class="text-gray-700 mb-2">{{ product.description }}</p>
                                                    <p class="text-gray-900 font-bold">{{ product.price }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </main>
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
            </div>
        </div>
    </AppLayout>
</template>



<style scoped>
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

