<?php

namespace Modules\ShopProduct\Http\Requests;

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
            'rating' => 'required',
            'review' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'rating.required' => 'Укажите рейтинг',
            'review.required' => 'Напишите отзыв'
        ];
    }

}
