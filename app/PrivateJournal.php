<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateJournal extends Model
{
    public function clientDetails()
    {
        return $this->belongsTo('App\Client','client_id');
    }
}
