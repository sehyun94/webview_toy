<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TestController extends  Controller
{
    public  function index(Request $request)
    {
        dd(111);
        // dd($request->input('ci'));
    }
}