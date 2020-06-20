<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ShowData(){
        $data = $this->get_user_data();

        return view('admission.admit-card',compact('data'));
    }

    public function get_user_data(){
        $get_data = User::where('id',Auth::user()->id)->first();
        return $get_data;
    }

    public function previewPDF($id){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_into_html());
        return $pdf->stream();
    }

    function convert_into_html()
    {
        $users_data = $this->get_user_data();
        $hsc = DB::table('hscs')->where('hsc_roll',$users_data->hsc_roll)->first();




        $output = '<h3 style="text-align: center">Public University Admission Exam<br><span style="text-align: center">Admit Card</span></h3><hr><br>
                   <p><b>Student Name:</b> '.$users_data->full_name.'</p>'.
                   '<p><b>HSC Roll:</b> '.$hsc->hsc_roll.'</p>'.
                   '<p><b>Registration Num:</b> '.$hsc->hsc_registration.'</p>'






        ;





        return $output;
    }
}
