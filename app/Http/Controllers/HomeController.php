<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('admin.admin-panel');
    }
    // public function client_profile()
    // {
    //     return view('clients.client-profile');
    // }
}
