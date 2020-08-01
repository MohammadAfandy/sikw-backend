<?php

namespace App;

class Warga extends BaseModel
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
