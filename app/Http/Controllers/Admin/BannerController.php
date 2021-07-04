<?php

namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\banner;

class BannerController extends Controller
{

    public function index() 
    {
        $data = banner::orderBy('id','DESC')->paginate(10);
       
        //return view('admin.courses.index',compact('data'));
        return view('admin.banner.index',compact('data'));
    }

     public function store(Request $request)
    {
      
   $data = new banner;

            $data->name = $request->name;
               $data->status = $request->status;
         


            $data->save();
            //return back()->with('flash_success', 'Course Created successfully');
            return redirect('admin/banners')->with('flash_success', 'News created successfully');
    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('admin.banner.create');
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
        $data = banner::find($id);
  
        return view('admin.banner.edit',compact('data'));
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

        $banner = banner::find($id);

      

            $banner->name = $request->name;
            $banner->status = $request->status;
                       $banner->save();
        return redirect('admin/banners')->with('flash_success', 'News updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = banner::find($id);
              $banner->delete();
        return back()->with('flash_success', 'News deleted Successfully!');
    }

   
}
