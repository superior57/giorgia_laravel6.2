<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Heroimage;
use App\Introduction;
use App\Interior;
use App\Exterior;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $heroImage = Heroimage::all();
        $introduction = Introduction::all();
        $interiors = Interior::all();
        $exteriors = Exterior::all();
        return view('admin.dashboard',['heroImage'=>$heroImage,'introduction'=>$introduction,'interiors'=>$interiors,'exteriors'=>$exteriors]);
    }

    public function saveHeroImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Heroimage::updateHeroImage($filename,1);
        
        return response()->json($result);
    }

    public function saveIntroduction(Request $request) {
        $introduction = $request->input('introduction');
        $result = Introduction::saveIntroduction($introduction,1);
        
        return response()->json($result);
    }
    
}