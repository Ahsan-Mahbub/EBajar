<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
        $sub_category = $this->route('sub_category');
        return [
            'sub_category_name' => 'required|unique:sub_catagorys,sub_category_name,' . $sub_category .',sub_category_id',
            'category_name' => 'required',
            'brand_name' => 'required',
        ];
    }
}
