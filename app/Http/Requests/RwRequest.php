<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RwRequest extends FormRequest
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
            'nama' => 'required|max:100|unique:rws,nama,NULL,id,kelurahan_id,' . request()->kelurahan_id,
            'alamat_kantor' => 'required',
            'kelurahan_id' => 'required|exists:kelurahans,id,deleted_at,NULL',
        ];
    }
}
