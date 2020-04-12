<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmationMail;
use App\Notifications\NotifyConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Mail;

class ApplicantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function NewApplicants(){

        $new = DB::table('admissions')
                ->join('payments','admissions.payment_id','payments.id')
                ->select('admissions.*','payments.payment_number','payments.payment_trx_id')
                ->where('admissions.status',2)
                ->get();

        return view('admin.applicants.new',compact('new'));
    }

    public function ConfirmApplicants(){
        $confirm = DB::table('admissions')
            ->join('users','admissions.user_id','users.id')
            ->join('university_choices','admissions.user_id','university_choices.user_id')
            ->join('hscs','admissions.user_id','hscs.user_id')
            ->join('sscs','admissions.user_id','sscs.user_id')
            ->select('admissions.id','admissions.user_id','users.full_name','university_choices.first_choice','university_choices.second_choice','university_choices.third_choice','hscs.hsc_roll','hscs.hsc_registration','hscs.hsc_board','hscs.hsc_group','hscs.hsc_result','hscs.hsc_year','sscs.ssc_result')
            ->where('admissions.status',1)
            ->get();

//        return response()->json($confirm);
        return view('admin.applicants.confirm',compact('confirm'));
    }

    public function DetailsPending($id){
        $stdInfo = DB::table('admissions')
                    ->join('users','admissions.user_id','users.id')
                    ->select('admissions.*','users.full_name','users.phone_number','users.email_address')
                    ->where('admissions.user_id',$id)
                    ->first();
        $stdChoice = DB::table('admissions')
                    ->join('university_choices','admissions.uni_choice_id','university_choices.id')
                    ->select('admissions.*','university_choices.first_choice','university_choices.second_choice','university_choices.third_choice')
                    ->where('admissions.user_id',$id)
                    ->first();

        $stdHSC = DB::table('admissions')
            ->join('hscs','admissions.user_id','hscs.user_id')
            ->select('admissions.*','hscs.hsc_roll','hscs.hsc_registration','hscs.hsc_board','hscs.hsc_result','hscs.hsc_group','hscs.hsc_year')
            ->where('admissions.user_id',$id)
            ->first();

        $stdSSC = DB::table('admissions')
            ->join('sscs','admissions.user_id','sscs.user_id')
            ->select('admissions.*','sscs.ssc_roll','sscs.ssc_board','sscs.ssc_result','sscs.ssc_year')
            ->where('admissions.user_id',$id)
            ->first();

        return view('admin.applicants.details',compact('stdInfo','stdChoice','stdSSC','stdHSC'));
    }

    public function MailSend($id){
        $user = DB::table('users')->where('id',$id)->first();
        Mail::to($user->email_address)->send(new ConfirmationMail());

        $approve = DB::table('admissions')->update(['status'=>1]);

        $notification = array(
            'messege' => 'Applicant Confirmed! Student Has Been Notified',
            'alert-type' => 'success'
        );

        return Redirect()->route('')->with($notification);
    }
}
