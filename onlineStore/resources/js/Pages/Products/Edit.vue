<script>
export default {
    name: 'ProductEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import ProductForm from '@/Components/Products/Form.vue'

const props = defineProps({
    product: {
        type: Object,
        required: true
    },
    categories: {
        type: Object,
        required: true
    }
})

const form = useForm({
    cod_product: props.product.cod_product,
    name: props.product.name,
    description: props.product.description,
    price: props.product.price,
    image_uri: props.product.image_uri,
    weight: props.product.weight,
    size: props.product.size,
    stock: props.product.stock,
    //En la edicion no se pueden ver estas opciones, arreglar(16/05/24)
    brand_id: props.product.brand_id,
    category_id: props.product.category_id

})

</script>

<template>
    <AppLayout title="Editar Categoria">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Editar Producto</h1>
        </template>

        <div class="py-12">
            <div class="max-ww-7xl mx-auto sm:px:6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <ProductForm :updating="true" :form="form" @submit="form.put(route('products.update', product.id))"/>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>

</template>
