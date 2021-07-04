<?php

namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\readers;
use App\Models\persons;
use App\Helpers\Helper;

class ReaderController extends Controller
{

    public function index()
    {
        $data = readers::orderBy('id','DESC')->paginate(10);
        //return view('admin.courses.index',compact('data'));
        return view('admin.readers.index',compact('data'));
    }

     public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $slug = Helper::getBlogUrl($request->title);
        if (readers::where('slug', '=', $slug)->count() > 0)
        {
            return back()->with('flash_error', 'This News Already Exits');
        }
        else{

            $userid=$request->user;
            $datauser = persons::find($userid);
 
            $data = new readers;
            $data->title = $request->title;
            $data->status = $request->status;
            $data->slug = $slug;
            $data->content = $request->description;
            $data->user = $datauser->name;
            $data->profile = $datauser->profile;
        
            
                $file = $request->file('image');
                $filename1 = uniqid() . '.' . $file->getClientOriginalExtension($file);
                $file->move(public_path('uploads/images/readers/'),$filename1); 
                $data->image = $filename1;
            


            $data->save();
            //return back()->with('flash_success', 'Course Created successfully');
            return redirect('admin/readers')->with('flash_success', 'News created successfully');
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = persons::all();
        return view('admin.readers.create',compact('data'));
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
        $data = readers::find($id);
        $data2 = persons::all();
        return view('admin.readers.edit',compact('data','data2'));
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

        $banner = readers::find($id);

        $userid=$request->user;
            $datauser = persons::find($userid);

              $banner->user = $datauser->name;
            $banner->profile = $datauser->profile;


        if($request->hasfile('image'))
        {
            @unlink('public/uploads/images/readers/'.$banner->image);
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension($file);
            $filePath = 'uploads/images/readers/' . $filename;
            $file->move(public_path('uploads/images/readers'),$filePath); 
            $banner->image = $filename;  
        }


            $banner->title = $request->title;
            $banner->status = $request->status;
         
        
            $banner->content = $request->description;
    
            $banner->save();

        return redirect('admin/readers')->with('flash_success', 'News updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = readers::find($id);
        @unlink('public/uploads/images/readers/'.$banner->image);
        $banner->delete();
        return back()->with('flash_success', 'News deleted Successfully!');
    }

   
}
