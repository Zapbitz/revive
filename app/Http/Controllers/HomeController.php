<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'client']);
        // return view('home');
    }
    public function admin_panel()
    {
        $bookings = Booking::all();
        return view('admin.admin-panel',compact('bookings'));
    }
    // public function client_profile()
    // {
    //     return view('clients.client-profile');
    // }
}
