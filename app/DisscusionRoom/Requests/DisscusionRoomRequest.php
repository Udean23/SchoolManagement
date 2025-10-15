<?php

namespace App\DisscusionRoom\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisscusionRoomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // Tambahkan rules validasi
        ];
    }
}