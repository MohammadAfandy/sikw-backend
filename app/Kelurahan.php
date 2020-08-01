<?php

namespace App;

class Kelurahan extends BaseModel
{
    public function rws()
    {
        return $this->hasMany(Rw::class);
    }
}
