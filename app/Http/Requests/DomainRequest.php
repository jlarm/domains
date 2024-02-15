<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomainRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'registrar' => ['required'],
            'registrar_url' => ['required', 'url'],
            'expiration' => ['required', 'date'],
            'status' => ['boolean'],
            'favicon' => ['nullable'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
