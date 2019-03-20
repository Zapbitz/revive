<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use App\Client;
use App\Doctor;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $role = auth()->user()->hasrole('client');
        $users=User::all();
        // dd();
        if($role)
        {
            $client = Client::where('email',auth()->user()->email)->first(); 

            if(!$client->premium)
            {
                return view('payment.chat'); 
            }
        }

        foreach ($users as $user) {
            if($user->hasrole('client'))
            {
               
               $user->role="client"; 
            }
        else if($user->hasrole('doctor'))
        {
            $user->role="doctor";
        }
        // dd($user);     
        }
        
        // dd($users->usersDetails);
        return view('chat.view',compact('users'));
    }

    public function show($id)
    {
        // $role = auth()->user()->hasrole('client');
        // if($role)
        // {
        //     $user = Doctor::findOrFail($id);
        // }
        // else
        // {
        //     $user = Client::findOrFail($id);

        // }
        $user = User::findOrFail($id);
        $chats = Chat::where('sender_id',$user->id)
                        ->orWhere('reciver_id',$user->id)
                        ->get();

        return view('chat.show',compact('user','chats'));
    }

    // public function send(Request $request)
    // {
    //     // dd('hello');
    //     
    //     $user = User::find(Auth::id());
    //     event(new ChatEvent($request->$message,$user));
    // }

    public function send(Request $request,$id)
    {
        // return $request->all();
        // if(auth()->user()->hasRole('client')){
        //     $user = Client::where('email',auth()->user()->email)->first();
        //     // $reciver = Doctor::findOrFail($id);
        // }
        // else
        //     {
        //     $user = Doctor::where('email',auth()->user()->email)->first();
        //     // $reciver = Doctor::findOrFail($id);
        //     }

        $user = User::find(Auth::id());
        event(new ChatEvent($request->message,$user));

        $chat = new Chat();
        $chat->sender_id = $user->id;
        $chat->reciver_id = $id;
        $chat->message = $request->message;
        $chat->save();
    }


    // public function getChat($id)
    // {
    //     $chats = Chat::where( function ($query) use ($id){
    //         $query->where('client_id','=', Auth::user()->id )->where('doctor_id','=',$id);
    //     })->orWhere(function ($query) use ($id) {
    //         $query->where('client_id','=', $id )->where( 'doctor_id' ,'=', Auth::user()->id );
    //     })->get();
       
    //     return $chats;
    // }
    // public function sendChat(Request $request)
    // {
    //     Chat::create([
    //         'client_id' => $request->client_id,
    //         'doctor_id' => $request->doctor_id,
    //         'message'   => $request->chat,
    //     ]);
    //     return [];
    // }
}
