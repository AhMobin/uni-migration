<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class ResultController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showForm(){
        $showResults = DB::table('results')->join('users','results.user_id','users.id')
                        ->join('universities','results.university_id','universities.id')
                        ->join('hscs','results.user_id','hscs.user_id')
                        ->select('results.*','users.full_name','hscs.hsc_roll','universities.university_name')
                        ->get();
        return view('admin.result.upload',compact('showResults'));
    }


    public function ImportResult(Request $request){

        $this->validate($request, [
            'result_sheet' => 'required|mimes:xls,xlsx,csv'
        ]);

        $path = $request->file('result_sheet');


        $result = (new FastExcel)->import($path, function ($line) {
            Result::create([
                'user_id' => $line['user_id'],
                'university_id' => $line['university_id'],
            ]);
        });

        $notification = array(
            'messege' => 'Result Uploaded Successful',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
