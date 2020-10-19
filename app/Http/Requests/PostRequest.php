<?php

namespace App\Http\Requests;

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
            'title' => 'required|min:5|max:75',
            'category_id' => 'required',
            'content' => 'required|min:25|max:500',
            'desc' => 'required|min:5|max:100'
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
