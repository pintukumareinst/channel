<?php

namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\contacts;

class ContactController extends Controller
{ 

    public function index() 
    {
        $data = contacts::orderBy('id','DESC')->paginate(10);
        //return view('admin.courses.index',compact('data'));
        return view('admin.contact.index',compact('data'));
    }

  

   
    public function destroy($id)
    {
        $banner = contacts::find($id);
        $banner->delete();
        return back()->with('flash_success', 'Deleted Successfully!');
    }

   
}
