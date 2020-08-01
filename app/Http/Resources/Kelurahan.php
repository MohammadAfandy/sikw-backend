<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Kelurahan extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'alamat_kantor' => $this->alamat_kantor,
            'rw' => $this->whenLoaded('rws'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
