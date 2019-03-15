<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use App\Booking;
use App\DoctorCat;
use App\ConsultDetail;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class DoctorController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Doctor::all();
        $bookings = Booking::where('doc_id',auth()->user()->id)->get();
        // dd($bookings[0]->user_details);
        return view('doctors.profile',compact('user','bookings'));
    }

    public function view_doctor()
    {

        $doctors=Doctor::all();
        return view('doctors.view',compact('doctors')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doc_cats=DoctorCat::all();
        return view('doctors.create',compact('doc_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $user = new User();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = Hash::make($request['password']);
            $user->save();

            $user->assignRole('doctor');

        // dd($user->assignRole('doctor'));

        $request->merge([ 
            'day' => implode(',', (array) $request->get('day'))
        ]);

        $con=new ConsultDetail();
            $con->start_time = $request['start_time'];
            $con->end_time = $request['end_time'];
            $con->day = $request->input('day');
        $con->save();

        // dd($con->day);
        Doctor::create([
            'name'      =>  $request['name'],
            'email'     =>  $request['email'],
            'password'  =>  $request['password'],
            'gender'    =>  $request['gender'],
            'license'   =>  $request['license'],
            'con_fee'   =>  $request['fee'],
            'doc_cat'   =>  $request['doc_cat'],
            'cons_id'   =>  $con->id,
        ]);
        
       return redirect('/doctor');
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
