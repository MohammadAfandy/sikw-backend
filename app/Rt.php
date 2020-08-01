<?php

namespace App;

class Rt extends BaseModel
{
    public function keluargas()
    {
        return $this->hasMany(Keluarga::class);
    }

    public function rw()
    {
        return $this->belongsTo(Rw::class);
    }
}
