<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Keluarga extends JsonResource
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
            'no_kk' => $this->no_kk,
            'rt' => $this->whenLoaded('rt'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
