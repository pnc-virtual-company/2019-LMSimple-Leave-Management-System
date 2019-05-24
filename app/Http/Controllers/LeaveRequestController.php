<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //Only authenticated users may access to the pages of this controller
        $this->middleware('auth');
    }
    
    public function index()
    {
     
      $reqest = \App\Leave_reqest::all();
      $user = \App\User::all();
      $leave_type = \App\Leave_type::all();
      return view('pages.leave_request',compact('reqest','user','leave_type'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //   $user = \App\User::all();
      $reqest = \App\Leave_reqest::all();
      return view('pages.request_id',compact('reqest'));
        // return view('pages.request_id');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $reqest = \App\Leave_reqest::create($request->all());
        return redirect('leave_request');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $request_show = \App\Leave_reqest::find($id);
        // dd($request_show);
        return view('pages.request_id', compact('request_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
