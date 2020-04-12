<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $get_data = User::select('id', 'full_name', 'email_address')->where('id',Auth::user()->id)->first();
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
//        $output = '
//     <h3 align="center">User Data</h3>
//     <table width="100%" style="border-collapse: collapse; border: 0px;">
//      <tr>
//    <th style="border: 1px solid; padding:12px;" width="20%">ID</th>
//    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
//    <th style="border: 1px solid; padding:12px;" width="15%">Email</th>
//   </tr>
//     ';
//        foreach($users_data as $user)
//        {
//            $output .= '
//      <tr>
//       <td style="border: 1px solid; padding:12px;">'.$user->id.'</td>
//       <td style="border: 1px solid; padding:12px;">'.$user->full_name.'</td>
//       <td style="border: 1px solid; padding:12px;">'.$user->email_address.'</td>
//      </tr>
//      ';
//        }
//        $output .= '</table>';


        $output = '<h3 style="text-align: center">Public University Admission Exam</h3>
//                   <p>Student Name:'.$users_data->full_name.'</p>';

        ;



        return $output;
    }
}
