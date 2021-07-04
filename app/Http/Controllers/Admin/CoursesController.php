<?php

namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\posts;
use App\Models\persons;
use App\Helpers\Helper;

class CoursesController extends Controller
{

    public function index() 
    {
        $data = posts::orderBy('id','DESC')->paginate(10);
        //return view('admin.courses.index',compact('data'));
        return view('admin.courses.index',compact('data'));
    }

     public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $slug = Helper::getBlogUrl($request->title);
        if (posts::where('slug', '=', $slug)->count() > 0)
        {
            return back()->with('flash_error', 'This News Already Exits');
        }
        else{

            $userid=$request->user;
            $datauser = persons::find($userid);
 
            $data = new posts;
            $data->title = $request->title;
            $data->status = $request->status;
            $data->slug = $slug;
            $data->content = $request->description;
            $data->user = $datauser->name;
            $data->profile = $datauser->profile;
        
           
            $data->region = $request->region; 
            $data->category = $request->category;
        
            
                $file = $request->file('image');
                $filename1 = uniqid() . '.' . $file->getClientOriginalExtension($file);
                $file->move(public_path('uploads/images/news/'),$filename1); 
                $data->image = $filename1;
            


            $data->save();
            //return back()->with('flash_success', 'Course Created successfully');
            return redirect('admin/news')->with('flash_success', 'News created successfully');
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
        return view('admin.courses.create',compact('data'));
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
        $data = posts::find($id);
        $data2 = persons::all();
        return view('admin.courses.edit',compact('data','data2'));
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

        $banner = posts::find($id);

        $userid=$request->user;
            $datauser = persons::find($userid);

              $banner->user = $datauser->name;
            $banner->profile = $datauser->profile;


        if($request->hasfile('image'))
        {
            @unlink('public/uploads/images/news/'.$banner->image);
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension($file);
            $filePath = 'uploads/images/news/' . $filename;
            $file->move(public_path('uploads/images/news'),$filePath); 
            $banner->image = $filename;  
        }


            $banner->title = $request->title;
            $banner->status = $request->status;
            $banner->category = $request->category;
        
            $banner->content = $request->description;
            $banner->region = $request->region;
              $banner->save();
        return redirect('admin/news')->with('flash_success', 'News updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = posts::find($id);
        @unlink('public/uploads/images/news/'.$banner->image);
        $banner->delete();
        return back()->with('flash_success', 'News deleted Successfully!');
    }

   
}
