<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\User;
use App\Role;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Only authenticated users may access to the pages of this controller
        $this->middleware('auth');
    }

    /**
     * Display a the profile page. Accessible to any authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        $user = Auth::user();
        return view('users.profile', ['user' => $user]);
    }

    /**
     * Display a listing of the users. 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['HR']);
        $users = User::with('roles')->get();
        $department= \App\Department::all();
        $position= \App\Position::all();
        $roles = Role::all();
        return view('users.index', ['users' => $users, 'roles'=> $roles],compact('department','position')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $request->user()->authorizeRoles(['HR']);
        // $roles = Role::all();
        // return view('users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['HR']);
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'  => 'required',
            'email' => 'required|email',
            'password' => 'required', 
            'startdate' => 'required',
            'department_id' => 'required',
            'position_id' => 'required',
            'roles' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

      

        // process the validation of fields
        // if ($validator->fails()) {
        //     return Redirect::to('users/create')
        //         ->withErrors($validator)
        //         ->withInput(Input::except('password'));
        // } else {
            // store the new user and attach roles to it
            $user = new User;
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->startdate = Input::get('startdate');
            $user->department_id = Input::get('department_id');
            $user->position_id = Input::get('position_id');       
            $user->password = bcrypt(Input::get('password'));
            $user->save();

            $user->roles()->attach(Input::get('roles'));
            
            // redirect
            return Redirect::to('users');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) 
    {
        $request->user()->authorizeRoles(['HR']);
        $user = User::find($id);
        $user->roleIds = $user->roles->pluck('id')->toArray();
        $roles = Role::all();
        return view('users.show', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
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
        $request->user()->authorizeRoles(['HR']);
        // validate
        $rules = array( 
            'name'  => 'required',
            'email' => 'required|email',
            'password' => 'required', 
            'startdate' => 'required',
            'department_id' => 'required',
            'position_id' => 'required',
            'roles' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the validation of fields
        // if ($validator->fails()) {
        //     return Redirect::to('users')->with('error','cannot update')
        //         ->withErrors($validator);
        // } else {
            // update user and synchronize the roles
            $user = User::find($id);
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->startdate = Input::get('startdate');
            $user->department_id = Input::get('department_id');
            $user->position_id = Input::get('position_id');
            $user->save();

            // $user = User::find($id);
            // $user->update($request->all());
            $user->roles()->sync(Input::get('roles'));
             
            // redirect
            return Redirect::to('users');
        // }
    }

    /**
     * Remove the specified resource from storage.
     * This method is called by Ajax
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    { 
        $request->user()->authorizeRoles(['HR']);
        $user = User::find($id);
        $user->delete();
        return redirect('users');
    }

    /**
     * Export the list of users into Excel
     *
     * @return \Illuminate\Http\Response
     */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
