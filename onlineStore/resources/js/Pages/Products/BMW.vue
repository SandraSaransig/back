<script>
export default {
    name: 'ProductsBMW'
}
</script>

<script setup>
import AppLayout from '@/Pages/Welcome.vue'
import { Link } from '@inertiajs/vue3'
import { Inertia } from '@inertiajs/inertia'



 defineProps({
     products:{
        type: Object,
        required: true
    }
 })


</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">BMW</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Prueba -->
                    <div class="bg-white">
                        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

                            <div
                                class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" v-if="products.lenght">
                                <div class="group relative" v-for="bmw in products" :key="products.id">
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
                                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                                    {{products.name}}
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


                    <!-- Paginacion -->
                    <div class="flex justify-between mt-2">
                        <Link v-if="products.current_page > 1" :href="products.prev_page_url" class="py-2 px-4 rounded">
                            PREVIOUS
                        </Link>
                        <div v-else></div>
                        <Link v-if="products.current_page < products.last_page" :href="products.next_page_url" class="py-2 px-4 rounded">
                            NEXT
                        </Link>
                        <div v-else></div>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>
