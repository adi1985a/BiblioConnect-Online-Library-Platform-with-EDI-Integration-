<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NowaKsiazkaRequest extends FormRequest
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
            'tytul' => 'required|string',
            'autor' => 'required|string',
            'rok_wydania' => 'required|integer',
            'kategoria' => 'required|string',
            'miniatura' => 'required|string'
        ];
    }
}
