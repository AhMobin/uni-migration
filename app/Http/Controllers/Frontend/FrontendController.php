<?php

namespace App\Http\Controllers\Frontend;

use App\Admission;
use App\Hsc;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Ssc;
use App\University;
use App\UniversityChoice;
use App\User;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\StaticAnalysis\HappyPath\AssertNotInstanceOf\A;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function BasicInfo(){
        return view('admission.basic_info');
    }

    public function storeInfos(Request $request){
        $validatedData = $request->validate([
            'ssc_roll' => 'required|unique:sscs',
            'ssc_board' => 'required',
            'ssc_group' => 'required',
            'ssc_result' => 'required',
            'ssc_year' => 'required',

            'hsc_roll' => 'required|unique:hscs',
            'hsc_registration' => 'required|unique:hscs',
            'hsc_board' => 'required',
            'hsc_group' => 'required',
            'hsc_result' => 'required',
            'hsc_year' => 'required',
        ]);


        Ssc::create([
            'user_id' => Auth::id(),
            'ssc_roll' => $request->ssc_roll,
            'ssc_board' => $request->ssc_board,
            'ssc_group' => $request->ssc_group,
            'ssc_result' => floatval($request->ssc_result),
            'ssc_year' => $request->ssc_year,
        ]);

        Hsc::create([
            'user_id' => Auth::id(),
            'hsc_roll' => $request->hsc_roll,
            'hsc_registration' => $request->hsc_registration,
            'hsc_board' => $request->hsc_board,
            'hsc_group' => $request->hsc_group,
            'hsc_result' => floatval($request->hsc_result),
            'hsc_year' => $request->hsc_year,
        ]);

        $notification = array(
            'messege' => 'Information Inserted Successful',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    public function AdmissionForm(){

        $ssc = Ssc::select('ssc_result')->where('user_id',Auth::id())->first();
        $hsc = Hsc::select('hsc_group','hsc_result')->where('user_id',Auth::id())->first();

        $result = $ssc->ssc_result + $hsc->hsc_result;
        $group = $hsc->hsc_group;
        if($result >= 9 && $group=='science'){
            $alluni = University::select('id','university_name')->where('status',1)->get();
            return view('admission.form',compact('alluni'));
        }elseif($result >= 8 && $result < 9 && $group=='science'){
            $GenSpeAgr = University::select('id','university_name')->where('unicategory_id','>',2)->get();
            return view('admission.below_nine',compact('GenSpeAgr'));
        }elseif ($result >= 8 && $group=='commerce' || $group=='arts'){
            $onlyGen = University::select('id','university_name')->where('unicategory_id',4)->get();
            return view('admission.com_art',compact('onlyGen'));
        }
    }


    public function AdmissionAllAccess(Request $request){
        $validatedData = $request->validate([
            'payment_number' => 'required',
            'payment_trx_id' => 'required',
        ]);

        UniversityChoice::create([
            'user_id' => Auth::id(),
            'first_choice' => $request->first_choice,
            'second_choice' => $request->second_choice,
            'third_choice' => $request->third_choice,
        ]);

        Payment::create([
            'user_id' => Auth::id(),
            'payment_number' => $request->payment_number,
            'payment_trx_id' => $request->payment_trx_id,
        ]);

        $uniChoice = DB::table('university_choices')->where('user_id',Auth::id())->first();
            $choice = $uniChoice->id;
        $payment = DB::table('payments')->where('user_id',Auth::id())->first();
            $pay = $payment->id;

        Admission::create([
            'user_id' => Auth::id(),
            'uni_choice_id' => $choice,
            'payment_id' => $pay,
        ]);

        User::update([
           'status' => 2
        ]);

        $notification = array(
            'messege' => 'We Will Confirm As Soon As Possible',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

}
