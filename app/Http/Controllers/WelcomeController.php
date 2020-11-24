<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroimage;
use App\Introduction;
use App\Interior;
use App\Exterior;

class WelcomeController extends Controller
{
    public function index() {
        $heroImage = Heroimage::all();
        $introduction = Introduction::all();
        $interiors = Interior::all();
        $exteriors = Exterior::all();
        return view('welcome',['heroImage'=>$heroImage, 'introduction'=>$introduction, 'interiors'=>$interiors, 'exteriors'=>$exteriors]);
    }
}
