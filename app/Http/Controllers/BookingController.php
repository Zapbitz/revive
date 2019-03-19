<?php

namespace App\Http\Controllers;

use App\Client;
use App\Doctor;
use App\Booking;
use App\Mail\BookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class BookingController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Client::where('email',auth()->user()->email)->first()->id);
        // dd($request['date']);
        $client_id=Client::where('email',auth()->user()->email)->first()->id;

        $booking = Booking::where([['date',$request['date']],['time',$request['time']]])->first();

        if($booking){

            return back()->with('error','already booked');

        }

        dd($booking);

        Booking::create([
            'doc_id'    =>   $request['doctor_id'],
            'client_id' =>   $client_id,
            'date'      =>   $request['date'],
            'time'      =>   $request['time'],
        ]);
        return redirect('/client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor=Doctor::findOrFail($id);
        // dd($doctor->consult->day);
        $start_time = strtotime($doctor->consult->start_time);
        $end_time = strtotime($doctor->consult->end_time);
        // dd(auth()->user()->name);
        $start_op_times[]=" ";
        $end_op_times[]=" ";

        // dd($start_op_time);
        $i=0;
        while( $start_time < $end_time )
        {
            $start_op_times[$i] =  gmdate('h:i',$start_time);
            $end_op_times[$i] = gmdate('h:i',($start_time + 900));
            
            $start_time += 900;
            $i++;
            // dd( $end_op_time[$i] );

           
        }
        // dd($start_op_time);
        return view('booking.view',compact('doctor','start_op_times','end_op_times'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function book_accept($id)
    {
        $booking = Booking::findOrFail($id);
        $client=Client::findOrFail($booking->client_id);
        $booking->isAccept = true;
        $booking->save();
        $mail=$this->sendMail($client,$booking,"accept");
        return redirect('doctor');
    }
    public function book_reject($id)
    {
        $booking = Booking::findOrFail($id);
        $client=Client::findOrFail($booking->client_id);
        $booking->isReject = true;
        $booking->save();
        $mail=$this->sendMail($client,$booking,"reject");
        return redirect('doctor');
    }

    public function sendMail($client,$booking,$type)
    {

        $doctor = Doctor::where('email',auth()->user()->email)->first();
        Mail::to($client->email)->send(new BookingMail($client,$doctor,$booking,$type));

    }
}
