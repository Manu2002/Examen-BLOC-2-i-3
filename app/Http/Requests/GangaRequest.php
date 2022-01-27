<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GangaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'points' => 'required',
            'img' => 'required',
            'price' => 'required',
            'discount_price' => 'required|lt:price',
            'available' => 'required',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nombre es obligatorio',
            'description.required' => 'Description obligatoria',
            'url.required' => 'URL es obligatoria',
            'points.required' => 'Points obligatorios',
            'img.required' => 'La IMG es obligatoria',
            'price.required' => 'El precio es obligatorio',
            'discount_price.required' => 'El descuento es obligatorio',
            'available.required' => 'Campo available obligatorio',
            'category_id.required' => 'Selecciona una categoría',
        ];
    }
}
