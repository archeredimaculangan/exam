<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

use Auth;

class UserController extends Controller
{
    public function __construct()
    {

    }
    
    public function create()
    {
        $roles = Role::all();
        return view('user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'first_name'    => 'required|string',
            'last_name'     => 'required|string',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|string|min:6',
            'role_id'       => 'required',
        ]);


        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'role_id'    => $request->role_id,
            'password'   => Hash::make($request->password),
            'email'      => $request->email
        ]);

        return redirect()->route('home')->withSuccess('Employee Successfully Created!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('user.edit',compact('roles','user'));
    }

    public function update(Request $request)
    {
        $credentials = $request->validate([
            'first_name'    => 'required|string',
            'last_name'     => 'required|string',
            'email'         => 'required|email|unique:users,email,'.$request->user_id,
            'password'      => 'nullable|sometimes|string|min:6',
            'role_id'       => 'required',
        ]);


        $user = User::find($request->user_id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;

        if($request->has('password') && $request->get('password') != '')
            $user->password = Hash::make($request->password);

        $user->update();

        return redirect()->route('home')->withSuccess('Employee Successfully Updated!');
    }

    public function delete($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('home')->withSuccess('Employee Successfully Deleted!');
    }
}