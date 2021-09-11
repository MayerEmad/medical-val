<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\RedirectResponse;

class ProductStoreUpdateRequest extends FormRequest
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
            'category_id'=>'required|numeric',
            'name' => ['required','min:3','max:190','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            'description' => 'required|max:300|string|regex:/(^[\pL\p{N}\r\n _.-]+$)/u',
            'ar_name'=>['required','min:3','max:190','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            'ar_description'=>'required|max:300|string|regex:/(^[\pL\p{N}\r\n _.-]+$)/u',
            //'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'=>'required|numeric',
            'quantity'=>'required|integer|numeric',
            'instock'=>'nullable',
            'discount'=>'nullable|numeric|between:0,100',
            'rate'=>'nullable|numeric|between:1,5',

        ];
    }

    public function messages()
    {
        return [
            'name.reuired' => 'A nice title is required for the category.',
            'description.required' => 'Please add description for the category.',
            //'image.required'=>'Add image',
        ];
    }
    public function failedValidation(Validator $validator)
    {
        return back()->withErrors($validator)->withInput();
    }

}
