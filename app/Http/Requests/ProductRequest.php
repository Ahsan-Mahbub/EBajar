<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name'          => 'required',
            'product_quantity'      => 'required',
            'product_weight'        => 'required',
            'product_size'          => 'required',
            'product_prize'         => 'required',
            'description'           => 'required',
            'product_prize'         => 'required',
        ];
    }
}
