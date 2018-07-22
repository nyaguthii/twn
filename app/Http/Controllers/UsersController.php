<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function index(){

        
    	$users=User::all();
    	return view('users.index',['users'=>$users]);
    }

    public function show(User $user){
    	return view('users.show',['user'=>$user]);
    }

    public function edit(User $user){


        $roles=Role::all();
    	return view('users.edit',['user'=>$user,'roles'=>$roles]);
    }

    public function update(User $user){

    	

    	$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required',
    		'contact'=>'required'

    	]);


    	$user->name=request('name');
    	$user->email=request('email');
    	$user->contact=request('contact');
    	
    	$user->is_active=request('is_active');
    	$user->is_member=request('is_member');
    	$user->is_staff=request('is_staff');

    	if (!empty(request('member_no'))) {
    		$user->member_no=request('member_no');
    	}
    	if (!empty(request('password'))) {
    		$user->password=Hash::make(request('password'));
    	}
    	if (!empty(request('role'))) {

    		foreach($user->roles() as $role){
            
            $user->roles()->detach($role);
        }

    	foreach(request('role') as $myrole){
            $role=Role::find($myrole);
            $user->roles()->attach($role);
        }
    		
    	}
    	

    	

    	$user->save();

    	return redirect()->route('users.index')->with('warning', 'User Updated');

    }
}
