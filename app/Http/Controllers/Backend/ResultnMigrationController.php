<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Result;
use App\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultnMigrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function Seat(){

        $result = DB::table('results')->get();

        return view('admin.result.uni_seat',compact('result'));

    }
}
