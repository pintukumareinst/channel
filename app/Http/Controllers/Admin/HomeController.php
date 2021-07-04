<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\persons;
use App\Models\contacts;
use App\Models\images;
use App\Models\posts;
use App\Models\readers;
use App\Models\banner;
//use App\Models\persons;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $tper = persons::count('id');
        $tc = contacts::count('id');
        $ti = images::count('id');
        $tp = posts::count('id');
        $tr = readers::count('id');
        $tban = banner::count('id');

    	return view('admin.home',compact('tper','tc','ti','tp','tr','tban'));
    }
}
