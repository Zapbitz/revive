<?php

namespace App\Http\Controllers;

use App\Client;
use App\Doctor;
use App\PrivateJournal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class PrivateJournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor_id = Doctor::where('email',auth()->user()->email)->first()->id;
        $pjournals = PrivateJournal::where('doctor_id',$doctor_id)->get();
        return view('private_journal.index',compact('pjournals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=Client::all();
        return view('private_journal.create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user= ;
        $doctor_id = Doctor::where('email',auth()->user()->email)->first()->id;
        $pjournal = new PrivateJournal();
        $pjournal->client_id = $request['client_id'];
        $pjournal->doctor_id = $doctor_id;
        $pjournal->key_note = $request['key_note'];
        $pjournal->save();
        return redirect('privatejournal')->with('success',"private journal successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pjournal = PrivateJournal::findOrFail($id);
        return view('private_journal.show',compact('pjournal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pjournal = PrivateJournal::findOrFail($id);
        return view('private_journal.edit',compact('pjournal'));
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
        // dd("update");
        $pjournal = PrivateJournal::findOrFail($id);
        $pjournal->key_note = $request['key_note'];
        $pjournal->save(); 
        return redirect('privatejournal')->with('success',"private journal successfully added");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pjournal = PrivateJournal::findOrFail($id);
        $pjournal->delete();
        return redirect('privatejournal')->with('success',"private journal successfully added");
    }
}
