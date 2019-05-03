<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Leave_type;
class LeaveTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pages=Leave_type::orderBy('id','desc')->get();
        $pages=Leave_type::all();
        return view('pages.leave_type',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $leave= Leave_type::all(); 
      return view('pages.leave_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = new Leave_type;
        $user->leave_type=$request->input('create');
        $user->save();
        return redirect('leave_type');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $page=Leave_type::findOrFail($id);
        // return view('pages.show_leaveType',compact('page',$page));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        
        $pages=Leave_type::findOrFail($id);
        $pages->update($request->all());

        return redirect('leave_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages=Leave_type::findOrFail($id);
        $pages->delete();
         return redirect('leave_type');
    }
    
}
