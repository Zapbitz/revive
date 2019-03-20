<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    public function clientDetails()
    {
        return $this->belongsTo('App\Client','client_id');
    }
    public function doctorDetails()
    {
        return $this->belongsTo('App\Doctor','doctor_id');
    }
    public function medicineDetails()
    {
        return $this->hasMany('App\medicine','disease_id');
    }
}
