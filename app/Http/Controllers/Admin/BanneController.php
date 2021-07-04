<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\images;

class BanneController extends Controller
{  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = images::orderBy('id','DESC')->paginate(10);
        return view('admin.banne.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banne.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'status' => 'required',
        ]);

        $banner = new images;
       
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension($file);
            $filePath = 'uploads/images/banners/' . $filename;
            $file->move(public_path('uploads/images/banners'),$filePath); 
            $banner->image = $filename;  
        
        $banner->status = $request->status;
        $banner->save();
        return redirect('admin/images')->with('flash_success', 'Banner Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = images::find($id);
        return view('admin.banne.edit',compact('data'));
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

        $banner = images::find($id);
        if($request->hasfile('image'))
        {
            @unlink('public/uploads/images/banners/'.$banner->image);
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension($file);
            $filePath = 'uploads/images/banners/' . $filename;
            $file->move(public_path('uploads/images/banners'),$filePath); 
            $banner->image = $filename;  
        }
        $banner->status = $request->status;
        $banner->save();
        return redirect('admin/images')->with('flash_success', 'Banner Updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = images::find($id);
        @unlink('public/uploads/images/banners/'.$banner->image);
        $banner->delete();
        return back()->with('flash_success', 'Banner Deleted  Successfully!');
    }
}