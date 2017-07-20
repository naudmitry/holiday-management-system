<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest
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
            'name' => 'required|max:255',
            'name_r' => 'required|max:255',
            'email' => 'required|max:255|email',
            'address' => 'required|max:255',
            'role' =>  ['required', Rule::in(\App\Enums\RolesEnum::getAll())],
            'position_id' => 'exists:positions,id',
            'password' => 'max:255|alpha_dash',
        ];
    }

}
