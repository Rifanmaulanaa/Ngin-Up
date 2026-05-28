<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePemesananRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_properti'    => 'required|integer|exists:properti,id_properti',
            'tanggal_check_in'  => 'required|date',
            'tanggal_check_out' => 'required|date|after:tanggal_check_in',
            'total_tamu'     => 'required|integer|min:1',
            'catatan'        => 'nullable|string',
        ];
    }
}
