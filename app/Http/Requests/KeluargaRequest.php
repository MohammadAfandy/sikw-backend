<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeluargaRequest extends FormRequest
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
            'no_kk' => 'required|digits:16|unique:keluargas,no_kk,NULL,id,rt_id,' . request()->rt_id,
            'rt_id' => 'required|exists:rts,id,deleted_at,NULL',
        ];
    }
}
