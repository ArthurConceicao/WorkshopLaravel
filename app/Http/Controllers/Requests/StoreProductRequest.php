<?php

namespace App\Http\Controllers\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:100', Rule::unique('products', 'name')],
            'amount' => ['required', 'numeric', 'max:1000'],
            'description' => ['required', 'string', 'max:1000'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => trans('product.name'),
            'amount' => trans('product.amount'),
            'description' => trans('product.description'),
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Coloca o nome aí por favor companheiro'
        ];
    }
}
