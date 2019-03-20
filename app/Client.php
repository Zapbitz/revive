<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'email', 'password','age','gender','occupation','martial_status',
    ];

    public function usersDetails()
    {
        return $this->belongsTo(User::class,'email');
    }
}
