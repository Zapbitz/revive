<?php

namespace App\Http\Controllers;

use PDF;
use auth;
use App\Client;
use App\Doctor;
use App\Disease;
use App\Medicine;
use App\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Auth::user()->hasRole('doctor');
        $roleAdmin=Auth::user()->hasRole('admin');
        // dd($role);
        if($role)
        {
            $doctor_id = Doctor::where('email',auth()->user()->email)->first()->id;
            $prescriptions = Prescription::where('doctor_id',$doctor_id)->get();
        }
        else
        {
            $client_id = Client::where('email',auth()->user()->email)->first()->id;
            $prescriptions = Prescription::where('client_id',$client_id)->get();
        }
        if($roleAdmin)
        {
            $prescriptions = Prescription::all();
        }
        // dd($prescriptions[0]->clientDetails->name);
        return view('prescription.index',compact('prescriptions'));
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
        $date = Date("d/m/Y");
        $client_id = $request->client_id;
        $doctor_id = Doctor::where('email',auth()->user()->email)->first()->id;

        // store disease table details
        $disease = new Disease();
        $disease->name = $request->diseases_name;
        $disease->client_id = $client_id;
        $disease->doctor_id = $doctor_id;
        $disease->save();

        // store prescription table details
        $prescription = new Prescription();
        $prescription->doctor_id = $doctor_id;
        $prescription->client_id = $client_id;
        $prescription->diseases_id = $disease->id;
        $prescription->date = $date;
        $prescription->save();

        // store medicine table details
        $count = count($request->medicine_name);
        for ($i = 0; $i < $count ; $i++) { 
           $medicine = new Medicine(); 
           $medicine->prescription_id = $prescription->id;
           $medicine->medicine_name = $request->medicine_name[$i];
           $medicine->medicine_type = $request->medicine_type[$i];
        //   dd($request->medicine_dose);
           $medicine->dose = $request->medicine_dose[$i];
           $medicine->disease_id= $disease->id;
           $medicine->save();
        }
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
        $client = Client::findOrFail($id);
        return view('prescription.show',compact('client'));
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
    public function pdf($id)
    {
        $prescription = Prescription::findOrFail($id);
        $medicines = Medicine::where('prescription_id',$id)->get();
        // dd($prescription);
        $pdf = PDF::loadView('prescription.pdf',compact('prescription','medicines'));
        return $pdf->stream(uniqid().'_form_q.pdf');
    }
}
