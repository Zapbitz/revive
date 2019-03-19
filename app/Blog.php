<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function WrittenBy()
    {
        return $this->hasOne(User::class,'id');
    }
}
