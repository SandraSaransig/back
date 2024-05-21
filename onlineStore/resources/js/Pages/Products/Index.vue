<script>
export default {
    name: 'ProductsIndex'
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
                            <li class="flex justify-between gap-x-6 py-5" v-for="product in products.data">
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

                                        <!-- Filters -->
                                        <form class="mt-4 border-t border-gray-200">
                                            <div class="border-t border-gray-200 px-4 py-6">
                                                <h3 class="-mx-2 -my-3 flow-root">
                                                    <!-- Expand/collapse section button -->
                                                    <button type="button"
                                                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                                        aria-controls="filter-section-mobile-1" aria-expanded="false">
                                                        <span class="font-medium text-gray-900">Categoria</span>
                                                        <span class="ml-6 flex items-center">
                                                            <!-- Expand icon, show/hide based on section open state. -->
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                                            </svg>
                                                            <!-- Collapse icon, show/hide based on section open state. -->
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </h3>
                                                <!-- Filter section, show/hide based on section state. -->
                                                <div class="pt-6" id="filter-section-mobile-1">
                                                    <div class="space-y-6">
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-0" name="category[]"
                                                                value="new-arrivals" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-0"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">New
                                                                Arrivals</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-1" name="category[]"
                                                                value="sale" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-1"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">Sale</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-2" name="category[]"
                                                                value="travel" type="checkbox" checked
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-2"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">Travel</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-3" name="category[]"
                                                                value="organization" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-3"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">Organization</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-4" name="category[]"
                                                                value="accessories" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-4"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">Accessories</label>
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
                                                <button type="button"
                                                    class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                                    id="menu-button" aria-expanded="false" aria-haspopup="true">
                                                    Sort
                                                    <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                                            <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                                tabindex="-1">
                                                <div class="py-1" role="none">
                                                    <!--
                  Active: "bg-gray-100", Not Active: ""

                  Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                -->
                                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                                        role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to
                                                        High</a>
                                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                                        role="menuitem" tabindex="-1" id="menu-item-4">Price: High to
                                                        Low</a>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button"
                                            class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                                            <span class="sr-only">View grid</span>
                                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                                            <span class="sr-only">Filters</span>
                                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <section aria-labelledby="products-heading" class="pb-24 pt-6">
                                    <h2 id="products-heading" class="sr-only">Products</h2>

                                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                                        <!-- Filters -->
                                        <form class="hidden lg:block">
                                            <div class="border-b border-gray-200 py-6">
                                                <h3 class="-my-3 flow-root">
                                                    <!-- Expand/collapse section button -->
                                                    <button type="button"
                                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                                        aria-controls="filter-section-1" aria-expanded="false">
                                                        <span class="font-medium text-gray-900">Category</span>
                                                        <span class="ml-6 flex items-center">
                                                            <!-- Expand icon, show/hide based on section open state. -->
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                                            </svg>
                                                            <!-- Collapse icon, show/hide based on section open state. -->
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </h3>
                                                <!-- Filter section, show/hide based on section state. -->
                                                <div class="pt-6" id="filter-section-1">
                                                    <div class="space-y-4">
                                                        <div class="flex items-center">
                                                            <input id="filter-category-0" name="category[]"
                                                                value="new-arrivals" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-0"
                                                                class="ml-3 text-sm text-gray-600">New Arrivals</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-category-1" name="category[]" value="sale"
                                                                type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-1"
                                                                class="ml-3 text-sm text-gray-600">Sale</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-category-2" name="category[]"
                                                                value="travel" type="checkbox" checked
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-2"
                                                                class="ml-3 text-sm text-gray-600">Travel</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-category-3" name="category[]"
                                                                value="organization" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-3"
                                                                class="ml-3 text-sm text-gray-600">Organization</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-category-4" name="category[]"
                                                                value="accessories" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-4"
                                                                class="ml-3 text-sm text-gray-600">Accessories</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <!-- Product grid -->
                                        <div class="lg:col-span-3">
                                            <!-- Your content -->
                                            <!-- Prueba vista producto -->
                                            <div class="bg-white">
                                                <div
                                                    class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                                                    <div
                                                        class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                                                        <div class="group relative">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                                                    alt="Front of men&#039;s Basic Tee in black."
                                                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                                            </div>
                                                            <div class="mt-4 flex justify-between">
                                                                <div>
                                                                    <h3 class="text-sm text-gray-700">
                                                                        <a href="#">
                                                                            <span aria-hidden="true"
                                                                                class="absolute inset-0"></span>
                                                                            Basic Tee
                                                                        </a>
                                                                    </h3>
                                                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                                                </div>
                                                                <p class="text-sm font-medium text-gray-900">$35</p>
                                                            </div>
                                                        </div>

                                                        <!-- More products... -->
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </section>
                            </main>
                        </div>
                    </div>



                    <!-- Paginacion -->
                    <div class="flex justify-between mt-2">
                        <Link v-if="products.current_page > 1" :href="products.prev_page_url" class="py-2 px-4 rounded">
                        PREVIOUS
                        </Link>
                        <div v-else></div>
                        <Link v-if="products.current_page < products.last_page" :href="products.next_page_url"
                            class="py-2 px-4 rounded">
                        NEXT
                        </Link>
                        <div v-else></div>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>
