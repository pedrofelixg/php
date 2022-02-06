<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrosFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O Campo nome é obrigatório',
            'nome.min' => 'O Campo precisa ter pelo menos três caracteres'
        ];
    }
}
