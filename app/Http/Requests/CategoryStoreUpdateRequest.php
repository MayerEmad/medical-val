<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\RedirectResponse;

class CategoryStoreUpdateRequest extends FormRequest
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
    //['required','min:3','max:190','string',Rule::unique('categories', 'name')->ignore($this->category),'regex:/(^[\pL\p{N} _.-]+$)/u']
    public function rules() //alpha_dash   'regex:/(^[\p{Arabic}\s\p{N}]+$)/u'
    {
       
        return [
            'parent_id'=>'numeric',
            'name' => ['required','min:3','max:190','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            'ar_name'=>['required','min:3','max:190','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            'description' => 'required|max:300|string|regex:/(^[\pL\p{N}\r\n _.-]+$)/u',
            'ar_description'=>'required|max:300|string|regex:/(^[\pL\p{N}\r\n _.-]+$)/u',
            'discount'=>'nullable',
            ];
    }

    public function messages()
    {
        return [
            'name.reuired' => 'A nice title is required for the category.',
            'description.required' => 'Please add description for the category.',
            'image.required'=>'Add image',
        ];
    }
    public function failedValidation(Validator $validator)
    {
        return back()->withErrors($validator)->withInput();
    }

}
