<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\UniCategory;
use App\University;
use Illuminate\Http\Request;
use Str;
use DB;

class UniversityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function UniversityCategories(){
        $categories = UniCategory::select('id','category_name','status')->get();
        return view('admin.university.categories',compact('categories'));
    }

    public function StoreCategory(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|unique:uni_categories',
        ]);

        UniCategory::create([
            'category_name' => $request['category_name'],
            'category_slug' => Str::slug($request['category_name']),
        ]);

        $notification = array(
            'messege' => 'Category Inserted Successful',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function AllUniversity(){
        $categories = UniCategory::select('id','category_name')->where('status',1)->get();
        $universities = DB::table('universities')
                        ->join('uni_categories','universities.unicategory_id','uni_categories.id')
                        ->select('universities.*','uni_categories.category_name')
                        ->get();
        return view('admin.university.list',compact('categories','universities'));
    }

    public function StoreUniversity(Request $request){
        $validatedData = $request->validate([
            'university_name' => 'required|unique:universities',
            'unicategory_id' => 'required',
        ]);

        University::create([
            'university_name' => $request['university_name'],
            'university_slug' => Str::slug($request['university_name']),
            'unicategory_id' => $request['unicategory_id'],
            'university_contact' => $request['university_contact'],
        ]);

        $notification = array(
            'messege' => 'University Added Successful',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }


    public function EditUniversity($id){
        $edit = University::with('unicategory')->where('id',$id)->first();
        $allCat = UniCategory::all();
        return view('admin.university.edit_uni',compact('edit','allCat'));
    }

    public function UpdateUniversity(Request $request, $id){
        $update = University::findorfail($id);
        $update->university_name = $request->university_name;
        $update->unicategory_id = $request->unicategory_id;
        $update->university_contact = $request->university_contact;
        $update->uni_seat = $request->uni_seat;
        $update->status = $request->status;
        $update->save();

        $notification = array(
            'messege' => 'University Added Successful',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }
}
