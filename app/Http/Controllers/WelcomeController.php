<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\posts;
use App\Models\readers;
use App\Models\banner;
use App\Models\images;
use App\Models\contacts;

class WelcomeController extends Controller
{
    public function index()
    { 

            $banner = banner::where('status','Active')->limit(1)->get();
               $images = images::orderBy('id','DESC')->get();

        $assam = posts::where('region','Assam')->orderBy('id','DESC')->limit(4)->get();
        $arunachal = posts::where('region','Arunachal Pradesh')->orderBy('id','DESC')->limit(4)->get();
        $manipur = posts::where('region','Manipur')->orderBy('id','DESC')->limit(4)->get();
        $nagaland = posts::where('region','Nagaland')->orderBy('id','DESC')->limit(4)->get();
        $meghalaya = posts::where('region','Meghalaya')->orderBy('id','DESC')->limit(4)->get();
        $mizoram = posts::where('region','Mizoram')->orderBy('id','DESC')->limit(4)->get();
        $sikkim = posts::where('region','Sikkim')->orderBy('id','DESC')->limit(4)->get();
        $tripura = posts::where('region','Tripura')->orderBy('id','DESC')->limit(4)->get();

        return view('welcome',compact('assam','arunachal','manipur','nagaland','meghalaya','mizoram','sikkim','tripura','banner','images'));
    }
 
      public function news($slug)
    {
             $images = images::orderBy('id','DESC')->get();
         $banner = banner::where('status','Active')->limit(1)->get();

        $news = posts::where('slug',$slug)->limit(1)->get();

        return view('news',compact('news','banner','images'));
    }


       public function readersnews($slug)
    {
             $images = images::orderBy('id','DESC')->get();
         $banner = banner::where('status','Active')->limit(1)->get();

        $news = readers::where('slug',$slug)->limit(1)->get();

        return view('readersnews',compact('news','banner','images'));
    }

     public function region($region)
    {
             $images = images::orderBy('id','DESC')->get();
         $banner = banner::where('status','Active')->limit(1)->get();

        if($region=='arunachal-pradesh')
            $region='Arunachal Pradesh';
        else if($region=='assam')
            $region='Assam';
        else if($region=='manipur')
            $region='Manipur';
        else if($region=='mizoram')
            $region='Mizoram';
        else if($region=='meghalaya')
            $region='Meghalaya';
        else if($region=='tripura')
            $region='Tripura';
        else if($region=='nagaland')
            $region='Nagaland';
        else if($region=='sikkim')
            $region='Sikkim';
        else if($region=='national')
            $region='National';
        else if($region=='world')
            $region='World';

        $assam = posts::where('region',$region)->orderBy('id','DESC')->paginate(12);

        return view('region',compact('assam','region','banner','images'));
    }

     public function category($region)
    {
              $images = images::orderBy('id','DESC')->get();
        if($region=='sports')
            $region='Sports';
        else if($region=='entertainment')
            $region='Entertainment';


  $banner = banner::where('status','Active')->limit(1)->get();
        $assam = posts::where('category',$region)->orderBy('id','DESC')->paginate(12);

        return view('region',compact('assam','region','banner','images'));
    }


      public function allnews()
    {
             $images = images::orderBy('id','DESC')->get();
         $banner = banner::where('status','Active')->limit(1)->get();

        $assam = posts::orderBy('id','DESC')->paginate(12);

        return view('allnews',compact('assam','banner','images'));
    }
       public function readers()
    {
             $images = images::orderBy('id','DESC')->get();
         $banner = banner::where('status','Active')->limit(1)->get();

        $assam = readers::orderBy('id','DESC')->paginate(12);

        return view('readers',compact('assam','banner','images'));
    }

         public function contact()
    {

        
            $banner = banner::where('status','Active')->limit(1)->get();


        return view('contact',compact('banner'));
    }
         public function about()
    {


            $banner = banner::where('status','Active')->limit(1)->get();
        

        return view('aboutus',compact('banner'));
    }
          public function help()
    {


            $banner = banner::where('status','Active')->limit(1)->get();
        

        return view('help',compact('banner'));
    }


       public function save(Request $request) 
    {

          
            $banner = banner::where('status','Active')->limit(1)->get();
       

 
            $data = new contacts;
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->message = $request->message;
            $submit=1;
          
         

            $data->save();
            //return back()->with('flash_success', 'Course Created successfully');
             return view('contact',compact('banner','submit'));


        
    }

     public function fetchProducts(Request $request)
    {
        
        if($request->get('query'))
        {
        $query = $request->get('query');
        $searchResults = posts::where('title', 'LIKE', "%{$query}%")->get();
        $output = '';
        foreach($searchResults as $row)
        {
            $output .= '<li class="list-group-item list-group-item-action"><a id="anchor" href="'.url('/').'/news/'.$row->slug.'">'.$row->title.'</a></li>';
        }

        $searchResults = readers::where('title', 'LIKE', "%{$query}%")->get();
        foreach($searchResults as $row)
        {
            $output .= '<li class="list-group-item list-group-item-action"><a id="anchor" href="'.url('/').'/readers-forum/'.$row->slug.'">'.$row->title.'</a></li>';
        }
          
          echo $output;
        }
    }


}