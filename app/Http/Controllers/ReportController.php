<?php

namespace App\Http\Controllers;

use Excel;
use App\Booking;
use App\Disease;
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

    public function patient_booking($id)
    {
        $bookings = Booking::where('client_id',$id)->get();
        // dd($bookings);
        $data = 
        [
            'bookings'  => $bookings,
        ];
        $filename='patient Booking';
        $sheetname = 'booking';
        Excel::create($filename, function($excel) use($filename, $sheetname, $data){
            $myData = $data;
            $excel->sheet($sheetname, function($sheet) use($myData){
                $sheet->loadView('reports.patient-booking',[ 'data' => $myData ]);
            });
        })->export('xlsx');
    }

    public function disease($id)
    {
        $disease = Disease::findorFail($id);
        
        // dd($disease->name);
        // $data = 
        // [
        //     'disease'  => $disease,
        // ];
        $filename='Diseases Survey';
        $sheetname = 'diseases';
        Excel::create($filename, function($excel) use($filename, $sheetname, $disease){
            $myData = $disease;
            $excel->sheet($sheetname, function($sheet) use($myData){
                $sheet->loadView('reports.disease',[ 'disease' => $myData ]);
            });
        })->export('xlsx');
    }
}
