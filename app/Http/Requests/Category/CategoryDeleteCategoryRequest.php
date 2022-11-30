<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryDeleteCategoryRequest extends FormRequest
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
            'id' => 'required|integer|exists:categories,id'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'id' => $this->route('category')->getKey(),
        ]);
    }
}
