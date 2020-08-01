<?php

namespace App;

class Keluarga extends BaseModel
{
    public function rt()
    {
        return $this->belongsTo(Rt::class);
    }
}
