<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Result;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;

class ResultController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showForm(){
        return view('admin.result.upload');
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
