<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RtRequest extends FormRequest
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
            'nama' => 'required|max:100|unique:rts,nama,NULL,id,rw_id,' . request()->rw_id,
            'alamat_kantor' => 'required',
            'rw_id' => 'required|exists:rws,id,deleted_at,NULL',
        ];
    }
}
