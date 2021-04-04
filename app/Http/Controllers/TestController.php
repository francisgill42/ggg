<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use PDF;
class TestController extends Controller
{
    
    public function index()
    {
        $pdfdata = array(
            'full_name' => 'test',
            'address' => 'test',
            'phone' => '0',
            'gutter_length' => 0,
            'total_price' => 0
        );


        $pdf = PDF::loadView('emails.pdfemail', $pdfdata);
    
        return $pdf->download('itsolutionstuff.pdf');


    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function send_email(Request $request){
        $bodydata = array(
            'full_name' => $request->full_name
        );
        $pdfdata = array(
            'full_name' => $request->full_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'gutter_length' => $request->gutter_length,
            'total_price' => $request->total_price
        );
        $pdf = PDF::loadView('emails.pdfemail', $pdfdata);
        Mail::to($request->email)->send(new TestMail($bodydata,$pdf));
    }
}
