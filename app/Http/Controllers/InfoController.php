<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function create()
    {
        return view('pages.information');
    }
    public function personal()
    {
        return view('pages.personal');
    }

}



