<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadProfile extends Controller
{
    public function uploadProfile(Request $request)
    { 

      $fileName="";
     if( $request->hasFile('inputFile')){
      $fileName=$request->file('inputFile')->getClientOriginalName();
       $request->file('inputFile')->storeAs('/public/img',$fileName);
    }
    \DB::table('users')
    ->where('id',\Auth::user()->id)
    ->update(["profile"=>$fileName]);
    return back();
    }
}


// if( $request->hasFile('inputFile')){
//     $fileName=$request->file('inputFile')->getClientOriginalName();
//     $request->file('inputFile')->storeAs('/public/img',$fileName);
// }
//   \DB::table('users')
// ->where('id',Auth::users()->id)
// ->update(["profile"=>$fileName]);