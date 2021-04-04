<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenontonRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:50', 
            'email' => 'required|email', 
            'tgl_lahir' => 'date|before:today', 
            'no_telepon' => 'required|numeric|digits_between:11,13', 
            'alamat' => 'required|min:3|max:100',
            'password' => [
                'required', 'string', 'min:8', 'confirmed'
            ],
            'roles' => [
                'required', 'in:ADMIN,USER'
            ],
        ];
    }
}
