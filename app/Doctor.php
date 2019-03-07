<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
