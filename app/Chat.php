<?php

namespace App;

use App\Events\BroadCastChat;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $dispatchesEvents = [
        'created' => BroadCastChat::class
    ];
    protected $fillable=[
        'client_id','doctor_id','message'
    ];
}
