<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'code' => 'required|min:3|max:25',
            'title' => 'required|min:2|max:25'
        ];
    }
    public function messages(){
        return [
            'required' => 'Поле :attribute обязательно к заполнению',
            'min' => 'Минимальное к-ство символов: :min',
            'max' => 'Максимальное к-ство символов: :max'
        ];
    }
}
