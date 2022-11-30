<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductDeleteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->role === "admin"; // this is a basic authorization check. we can write policies for bigger authorizations.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:products,id',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'id' => $this->route('product')->getKey()
        ]);
    }
}
