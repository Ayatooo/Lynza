<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MediaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'model_type' => ['required'],
            'model_id' => ['required'],
            'path' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}