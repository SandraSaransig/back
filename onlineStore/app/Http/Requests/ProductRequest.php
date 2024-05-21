<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cod_product' => ['required', 'string', 'max:13', Rule::unique(table: 'products', column:'cod_product')->ignore(id: request('product'), idColumn:'id')],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'price' => ['required', 'numeric', 'min:0'],
            // 'image_uri' => ['image', 'mimes:jpeg,png,jpg'],
            'weight' => ['required', 'numeric'],
            'size' => ['required', 'string'],
            'stock' => ['required', 'string'],
            'brand_id' => ['required'],
            'category_id' => ['required']

        ];
    }

    public function messages():array
    {
        return [
            'cod_product.required'=> __('El codigo de producto es obligatorio.'),
            'cod_product.max'=> __('El codigo de producto no puede exceder los 13 caracteres.'),
            'cod_product.unique'=> __('El producto ya existe.'),

            'name.required'=> __('El nombre es obligatorio.'),

            'description.required'=> __('La descripción es obligatoria.'),

            'price.required'=> __('El precio es obligatorio.'),
            'price.numeric'=> __('El debe debe ser numeros.'),
            'price.min'=> __('El precio debe ser mayor a 0.'),

            'weight.required'=> __('El peso es obligatorio.')
        ];
    }
}
