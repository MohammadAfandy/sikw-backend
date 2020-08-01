<?php

namespace App;

class Rw extends BaseModel
{
    public function rts()
    {
        return $this->hasMany(Rt::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }
}
