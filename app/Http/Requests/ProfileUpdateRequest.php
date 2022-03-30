<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\RedirectResponse;

class ProfileUpdateRequest extends FormRequest
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
            'id'=>'required|numeric',
            'email' => 'required|string|email',
            'name' => ['required','min:3','max:190','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            'phone' => 'regex:/(01)[0-9]{9}/',
            'address' => ['max:100','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            'street' => ['max:100','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            'block'=> ['max:100','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            'house_building_number'=>'integer|numeric',
            'address_instructions'=> ['max:100','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
        ];
    }

    public function messages()
    {
        return [
            'name.reuired' => 'A name is required for the profile.',
        ];
    }
    public function failedValidation(Validator $validator)
    {
        return back()->withErrors($validator)->withInput();
    }

}
