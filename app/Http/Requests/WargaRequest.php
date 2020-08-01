<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WargaRequest extends FormRequest
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
            'nama' => 'required|max:150',
            'no_ktp' => 'nullable|digits:16',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'max:500',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|date_format:Y-m-d',
            'user_id' => 'nullable|exists:users,id',
        ];
    }
}
