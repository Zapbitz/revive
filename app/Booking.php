<?php

namespace App;

use App\Client;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable =[
        'doc_id','client_id','date','time'
    ];
    public function user_details()
    {
        return $this->belongsTo(Client::class,'doc_id');
    } 
}
