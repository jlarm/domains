<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomainRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required|unique:domains,name'],
            'registrar' => ['required'],
            'registrar_url' => ['required', 'url'],
            'expiration' => ['required', 'date'],
            'status' => ['boolean'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
