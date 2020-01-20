<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MainController extends Controller
{   
    public function index(Request $request) 
    {
        $ci = "";
        if($request->input('ci')) {
            $ci =  $request->input("ci");
        }
        return view('main', compact( "ci" ));
    }
    
    public function certification(Request $request) 
    {
        $ci = $request->input("ci");
        //return $ci;
    }
}
