<?php

namespace App;

use App\User;
use App\DoctorCat;
use App\ConsultDetail;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password','gender','license','con_fee','doc_cat',	'cons_id',
    ];
    public function usersDetails()
    {
        return $this->hasOne(User::class,'email');
    }

    public function consult()
    {
        return $this->hasOne('App\ConsultDetail','id');
    }
    public function doctorTypes()
    {
        return $this->belongsTo('App\DoctorCat','doc_cat');
    }
}
