<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Client;
use App\Doctor;
use App\Booking;
use App\Disease;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        // dd($bookings[0]->user_details->name);
        return view('admin.dashboard',compact('doctors'));
    }

    public function booking($id)
    {
        $bookings = Booking::where('doc_id',$id)->get();
        return view('admin.booking',compact('bookings'));
    }

    public function doctor()
    {
        $doctors = Doctor::all();
        // dd($bookings[0]->user_details->name);
        return view('admin.doctor',compact('doctors'));
    }
    public function report()
    {
        $doctors = Doctor::all();
        $clients = Client::all();
        $diseases = Disease::all();
        return view('admin.report',compact('doctors','clients','diseases'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('admin.blog',compact('blogs'));
    }
    public function client()
    {
        $clients = Client::all();
        return view('admin.client',compact('clients'));
    }
    public function show_doctor($id)
    {

        $doctor=Doctor::findOrFail($id);
        return view('admin.view-doctor',compact('doctor')); 
    }
    public function edit_doctor($id)
    {

        $doctor=Doctor::findOrFail($id);
        return view('admin.edit-doctor',compact('doctor')); 
    }
}
