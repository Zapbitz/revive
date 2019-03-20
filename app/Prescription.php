<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function diseaseDetails()
    {
        return $this->belongsTo('App\Disease','diseases_id');
    }
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
        return $this->hasMany('App\medicine','prescription_id');
    }
}
