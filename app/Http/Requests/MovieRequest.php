<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'judul' => 'required|string|min:3|max:100', 
            'starring' => 'required|string|min:3|max:100',
            'genre' => 'required|string|min:3|max:100',
            'language' => 'required|string|min:3|max:40',
            'subtitle' => 'required|string|min:3|max:40',
            'harga' => 'required',
            'duration' => 'required',
            'description' => 'required|string|min:3|max:1000',
        ];
    }
}
