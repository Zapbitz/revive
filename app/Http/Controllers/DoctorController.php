<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use App\Booking;
use App\DoctorCat;
use App\ConsultDetail;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Auth\Middleware\AdminMiddleware;

class DoctorController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(AdminMiddleware::class);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user=Doctor::all();
        // dd(Auth::user()->name);
        $doctor=Doctor::where('email',auth()->user()->email)->first();
        // dd($doctor);
        return view('doctors.profile',compact('doctor'));
    }

    public function view_doctor()
    {

        $doctors=Doctor::all();
        return view('doctors.view',compact('doctors')); 
    }


    public function view_booking()
    {
        $doc_id=Doctor::where('email',auth()->user()->email)->first()->id;
        $bookings = Booking::where('doc_id',$doc_id)->get();
        return view('doctors.booking',compact('bookings')); 
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
        $user_email = User::findOrFail($id)->email;
        $doctor = Doctor::where('email',$user_email)->first();
        // dd($doctor);
        $doctor_cats = DoctorCat::all();
        return view('doctors.edit',compact('doctor','doctor_cats'));
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
        $doctor=Doctor::findOrFail($id);

        $user=User::where('email',$doctor->email)->first();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=bcrypt($request['password']);
        $user->save();

        $doctor->name=$request['name'];
        $doctor->email=$request['email'];
        $doctor->password=$request['password'];
        $doctor->con_fee=$request['fee'];
        $doctor->doc_cat=$request['doc_cat'];
        $doctor->save();
        
        return redirect('/doctor');
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
