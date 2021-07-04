<?php

namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\persons;
use App\Helpers\Helper; 

class PersonController extends Controller
{

    public function index()
    {
        $data = persons::orderBy('id','DESC')->paginate(10);
        //return view('admin.courses.index',compact('data'));
        return view('admin.persons.index',compact('data'));
    }

     public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $slug = Helper::getBlogUrl($request->title);
        if (persons::where('slug', '=', $slug)->count() > 0)
        {
            return back()->with('flash_error', 'This User Already Exits');
        }
        else{
            $data = new persons;
       
            $data->slug = $slug;
     
            $data->name = $request->title;
            $data->status = $request->status;
           
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $filename1 = uniqid() . '.' . $file->getClientOriginalExtension($file);
                $file->move(public_path('uploads/images/users'),$filename1);
                $data->profile = $filename1;
            }


            $data->save();
            //return back()->with('flash_success', 'Course Created successfully');
            return redirect('admin/persons')->with('flash_success', 'User created successfully');
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //$data = persons::all();
        return view('admin.persons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = persons::find($id);
        return view('admin.persons.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);

        $banner = persons::find($id);
        if($request->hasfile('image'))
        {
            @unlink('public/uploads/images/users/'.$banner->profile);
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension($file);
            $filePath = 'uploads/images/users/' . $filename;
            $file->move(public_path('uploads/images/users'),$filePath); 
            $banner->profile = $filename;  
        }
            $banner->name = $request->title;
            $banner->status = $request->status;
        
        
        $banner->save();
        return redirect('admin/persons')->with('flash_success', 'Updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = persons::find($id);
        @unlink('public/uploads/images/users/'.$banner->profile);
        $banner->delete();
        return back()->with('flash_success', 'Deleted Successfully!');
    }

   
}
