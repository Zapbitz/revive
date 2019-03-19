<?php

namespace App\Http\Controllers;

use Excel;
use App\Booking;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function doctor_booking($id)
    {
        $bookings = Booking::where('doc_id',$id)->get();
        // dd($bookings);
        $data = 
        [
            'bookings'  => $bookings,
        ];
        $filename='Doctor Booking';
        $sheetname = 'booking';
        Excel::create($filename, function($excel) use($filename, $sheetname, $data){
            $myData = $data;
            $excel->sheet($sheetname, function($sheet) use($myData){
                $sheet->loadView('reports.doctor-booking',[ 'data' => $myData ]);
            });
        })->export('xlsx');
    }
}
