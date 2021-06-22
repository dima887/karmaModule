<?php

namespace Modules\AdminShopCategory\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopCategoryRequest extends FormRequest
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
            'category' => 'required|unique:categories',
            'thumbnail' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'Напишите категорию',
            'category.unique' => 'Данная категория уже существует',
            'thumbnail.image' => 'Данный тип файла не подходит',
        ];
    }
}
