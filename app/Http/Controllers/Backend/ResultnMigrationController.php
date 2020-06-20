<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\MigrationApproved;
use App\Mail\MigrationDenied;
use App\Result;
use App\UniMigrate;
use App\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ResultnMigrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin' );
    }


    public function Seat(){
        $result = DB::table('results')->get();
        return view('admin.result.uni_seat',compact('result'));

    }


    public function MigrationRequest(){
        $pending = DB::table('uni_migrates')
                    ->join('universities','uni_migrates.migration_uni','universities.id')
                    ->select('uni_migrates.*','universities.university_name')
                    ->where('uni_migrates.status',0)
                    ->get();

        return view('admin.result.migrate_request',compact('pending'));
    }


    public function MigrationDetails($id){

        $viewStd = DB::table('uni_migrates')
            ->join('users','uni_migrates.st_roll','users.hsc_roll')
            ->select('uni_migrates.*','users.full_name')
            ->where('uni_migrates.id',$id)
            ->first();

        $viewOld = DB::table('uni_migrates')
                    ->join('universities','uni_migrates.current_uni_id','universities.id')
                    ->select('uni_migrates.id','universities.university_name')
                    ->first();

        $newUni = DB::table('uni_migrates')
            ->join('universities','uni_migrates.migration_uni','universities.id')
            ->select('uni_migrates.id','universities.university_name')
            ->first();

        return view('admin.result.migration_details',compact('viewStd','viewOld','newUni'));
    }


    public function MigrationApproved($id){
        UniMigrate::where('id',$id)->update(['status'=>1]);
        $get = UniMigrate::find($id);
        DB::table('results')->where('user_roll',$get->st_roll)->update(['university_id'=>$get->migration_uni]);

        $user = DB::table('users')->where('hsc_roll',$get->st_roll)->first();
        Mail::to($user->email_address)->send(new MigrationApproved());

        $notification = array(
            'messege' => 'Migration Approved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function MigrationDenied($id){
        UniMigrate::where('id',$id)->update(['status'=>2]);
        $get = UniMigrate::find($id);

        $user = DB::table('users')->where('hsc_roll',$get->st_roll)->first();
        Mail::to($user->email_address)->send(new MigrationDenied());

        $notification = array(
            'messege' => 'Migration Denied',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }

}

//nurul@mail.com
