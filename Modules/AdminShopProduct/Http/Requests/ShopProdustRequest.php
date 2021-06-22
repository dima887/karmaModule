<?php

namespace Modules\AdminShopProduct\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopProdustRequest extends FormRequest
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
            'category_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'count' => 'required|numeric',
            //'thumbnail' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Напишите название товара',
            'category_id.required' => 'Укажите категорию',
            'brand_id.required' => 'Укажите бренд',
            'description.required' => 'Напишите описание товара',
            'price.required' => 'Укажите цену товара',
            'price.numeric' => 'Введите корректную цену',
            'count.required' => 'Укажите количество товара',
            'count.numeric' => 'Введите корректно количество товара',
            //'thumbnail.image' => 'Данный тип файла не подходит',
        ];
    }

}
