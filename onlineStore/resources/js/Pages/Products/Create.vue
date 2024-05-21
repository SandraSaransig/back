<script>
export default {
    name:'ProductsCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import ProductForm from '@/Components/Products/Form.vue'

defineProps({
    categories: {
        type: Object,
        required: true
    },
    brands: {
        type: Object,
        required: true
    }
})

const form = useForm({
    cod_product:'',
    name:'',
    description:'',
    price:'',
    image_uri:'',
    weight:'',
    size:'',
    stock:'',
    brand_id:'',
    category_id: ''

})
</script>

<template>
    <AppLayout title="Crear Producto">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Crear Producto</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <ProductForm :form="form" :categories="categories" :brands="brands" @submit="form.post(route('products.store'))"/>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
