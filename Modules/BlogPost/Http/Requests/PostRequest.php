<?php

namespace Modules\BlogPost\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'thumbnail' => 'required|image',
            'category_id' => 'required',
            'title' => 'required|max:100',
            'post' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'thumbnail.required' => 'Добавьте красивую картинку',
            'thumbnail.image' => 'Данный формат файла не подходит',
            'category_id.required' => 'Укажите категорию',
            'title.required' => 'Напишите заголовок к статье',
            'title.max' => 'Максимальная длина заголовка :max символов',
            'post.required' => 'Напишите что нибудь в посте',
        ];
    }

}
