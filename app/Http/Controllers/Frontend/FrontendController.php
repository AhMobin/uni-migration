<?php

namespace App\Http\Controllers\Frontend;

use App\Admission;
use App\Hsc;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Ssc;
use App\UniMigrate;
use App\University;
use App\UniversityChoice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function BasicInfoEdit(){
        $ssc = SSC::where('user_id',Auth::id())->first();
        $hsc = HSC::where('user_id',Auth::id())->first();
        return view('admission.info_update',compact('ssc','hsc'));
    }

    public function Applied(){
        return view('admission.applied');
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


    public function BasicInfoUpdate(Request $request, $id){
        $ssc = array();
        $ssc['ssc_roll'] = $request->ssc_roll;
        $ssc['ssc_board'] = $request->ssc_board;
        $ssc['ssc_group'] = $request->ssc_group;
        $ssc['ssc_result'] = $request->ssc_result;
        $ssc['ssc_year'] = $request->ssc_year;

        Ssc::where('user_id',$id)->update($ssc);

        $hsc = array();
        $hsc['hsc_roll'] = $request->hsc_roll;
        $hsc['hsc_registration'] = $request->hsc_registration;
        $hsc['hsc_board'] = $request->hsc_board;
        $hsc['hsc_group'] = $request->hsc_group;
        $hsc['hsc_result'] = $request->hsc_result;
        $hsc['hsc_year'] = $request->hsc_year;

        Hsc::where('user_id',$id)->update($hsc);

        $notification = array(
            'messege' => 'Information Update Successful',
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
            'status' => 2
        ]);

        $notification = array(
            'messege' => 'We Will Confirm As Soon As Possible',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }


    public function applyMigration(){
        $result = DB::table('results')
                ->join('users','results.user_roll','users.hsc_roll')
                ->join('universities','results.university_id','universities.id')
                ->join('hscs','results.user_roll','hscs.hsc_roll')
                ->select('results.*','users.full_name','users.hsc_roll','universities.university_name','hscs.hsc_group','hscs.hsc_result')
                ->where('results.user_roll',Auth::user()->hsc_roll)
                ->first();

        $migrate = DB::table('uni_migrates')
                    ->join('universities','uni_migrates.migration_uni','universities.id')
                    ->select('uni_migrates.*','universities.university_name')
                    ->where('uni_migrates.result_id',$result->id)
                    ->first();

        $ssc = Ssc::select('ssc_result')->where('user_id',Auth::id())->first();
        $hsc = Hsc::select('hsc_group','hsc_result')->where('user_id',Auth::id())->first();

        $gpa = $ssc->ssc_result + $hsc->hsc_result;
        $group = $hsc->hsc_group;

        if($migrate){
            if($gpa >= 9 && $group=='science'){
                $allUni = University::select('id','university_name')->where('status',1)->get();
                return view('admission.after_migrate',compact('allUni','result','migrate'));
            }elseif($gpa >= 8 && $gpa < 9 && $group=='science'){
                $GenSpeAgr = University::select('id','university_name')->where('unicategory_id','>',2)->get();
                return view('admission.after_migrate_nine',compact('GenSpeAgr','result','migrate'));
            }elseif ($gpa >= 8 && $group=='commerce' || $group=='arts'){
                $onlyGen = University::select('id','university_name')->where('unicategory_id',4)->get();
                return view('admission.after_migrate_artcom',compact('onlyGen','result','migrate'));
            }
        }else{
            if($gpa >= 9 && $group=='science'){
                $allUni = University::select('id','university_name')->where('status',1)->get();
                return view('admission.apply_migrate',compact('allUni','result'));
            }elseif($gpa >= 8 && $gpa < 9 && $group=='science'){
                $GenSpeAgr = University::select('id','university_name')->where('unicategory_id','>',2)->get();
                return view('admission.under_nine',compact('GenSpeAgr','result'));
            }elseif ($gpa >= 8 && $group=='commerce' || $group=='arts'){
                $onlyGen = University::select('id','university_name')->where('unicategory_id',4)->get();
                return view('admission.art_com_migrate',compact('onlyGen','result'));
            }
        }
    }


    public function MigratedApplied(Request $request){
        UniMigrate::create([
           'result_id' =>  $request->result_id,
           'st_roll' =>  $request->st_roll,
           'migration_uni' =>  $request->migration_uni,
           'current_uni_id' =>  $request->current_uni_id,
        ]);

        $notification = array(
            'messege' => 'Migration Applied. You will get Feedback.',
            'alert-type' => 'success'
        );

        return Redirect()->to('home')->with($notification);
    }

}
