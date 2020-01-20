<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TestController extends  Controller
{
    public  function index(Request $request)
    {
        $ci = $request->input('ci');
        return view("welcome",compact( 'ci') );
        // dd($request->input('ci'));
    }
}