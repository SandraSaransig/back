<script>
export default {
    name: 'ProductForm'
}
</script>

<script setup>
import FormSection from '@/Components/FormSection.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import TextInput from '@/Components/TextInput.vue'


//  Mismo formulario para crear y editar
defineProps({
    form: {
        type: Object,
        required: true
    },
    updating: {
        type: Boolean,
        required: false,
        default: false
    },
    categories: {
        type: Object,
        required: true
    },
    brands: {
        type: Object,
        required: true
    }

})


defineEmits(['submit'])
</script>

<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Edición Producto' : 'Crear Nuevo Producto' }}
        </template>
        <template #description>
            {{ updating ? 'Actualizar El Producto Seleccionado' : 'Crear Un Nuevo Producto' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col.span-6">
                <InputLabel for="cod_product" value="Codigo Producto" />
                <TextInput id="cod_product" v-model="form.cod_product" type="text" autocomplete="cod_product"
                    class="mt1 block w-full" />
                <InputError :message="$page.props.errors.cod_product" class="mt-2" />
                <br>
                <InputLabel for="name" value="Nombre" />
                <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="mt1 block w-full" />
                <InputError :message="$page.props.errors.name" class="mt-2" />
                <br>
                <InputLabel for="description" value="Descripción" />
                <TextInput id="description" v-model="form.description" type="text" autocomplete="description"
                    class="mt1 block w-full" />
                <InputError :message="$page.props.errors.description" class="mt-2" />
                <br>
                <InputLabel for="price" value="Precio" />
                <TextInput id="price" v-model="form.price" type="text" autocomplete="price" class="mt1 block w-full" />
                <InputError :message="$page.props.errors.price" class="mt-2" />
                <br>
                <!-- Cambiar para selecionar magen, ya que ahora solo esta en texto que no sirve -->
                <InputLabel value="Imagen Producto" />
                <SecondaryButton class="mt-2 mr-2" type="button">Subir Imagen</SecondaryButton>
                <InputError :message="$page.props.errors.image_uri" class="mt-2" />
                <br><br>
                <InputLabel for="weight" value="Peso" />
                <TextInput id="weight" v-model="form.weight" type="text" autocomplete="weight"
                    class="mt1 block w-full" />
                <InputError :message="$page.props.errors.weight" class="mt-2" />
                <br>
                <InputLabel for="size" value="Tamaño" />
                <TextInput id="size" v-model="form.size" type="text" autocomplete="size" class="mt1 block w-full" />
                <InputError :message="$page.props.errors.size" class="mt-2" />
                <br>
                <InputLabel for="stock" value="Stock" />
                <TextInput id="stock" v-model="form.stock" type="text" autocomplete="stock" class="mt1 block w-full" />
                <InputError :message="$page.props.errors.stock" class="mt-2" />
                <br>
                <div class="w-full mt-5">
                    <div class="flex">
                        <div class="w-1/2 mr-1">
                            <InputLabel for="brand_id" value="Marca" />
                            <!-- Select para elegir marca a la que pertenece el producto -->
                            <select v-model="form.brand_id" name="brand_id" id="brand_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="brand in brands" :value="brand.id">{{ brand.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.brand_id" class="mt-2" />
                        </div>
                        <div class="w-1/2 ml-1">
                            <InputLabel for="category_id" value="Categoria" />
                            <!-- Select para elegir categoria a la que pertenece el producto -->
                            <select v-model="form.category_id" name="category_id" id="category_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.category_id" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Actualizar' : 'Crear' }}
            </PrimaryButton>
        </template>
    </FormSection>

</template>
