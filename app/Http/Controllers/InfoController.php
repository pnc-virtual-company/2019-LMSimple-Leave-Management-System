<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function __construct()
    {
        //Only authenticated users may access to the pages of this controller
        $this->middleware('auth');
    }
    public function create()
    {
        return view('pages.information');
    }
    public function personal()
    {
        return view('pages.personal');
    }

}



