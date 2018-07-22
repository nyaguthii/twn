<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vehicle;

class UserVehiclesController extends Controller
{
    public function create(User $user){

    	return view('users.vehicles.create',['user'=>$user]);

    }

    public function store(User $user){

    	$this->validate(request(),[

    		'registration'=>'required'
    	]);

    	$vehicle=new Vehicle();
    	$vehicle->registration=request('registration');
    	$vehicle->is_active=true;

    	$user->vehicles()->save($vehicle);

    	return redirect()->route('users.show',['user'=>$user->id])->with('success', 'Vehicle Created');

    }

    public function edit(User $user,Vehicle $vehicle){

    	//dd($user->name);

    	return view('users.vehicles.edit',['user'=>$user,'vehicle'=>$vehicle]);

    }

    public function update(User $user,Vehicle $vehicle){

    	$this->validate(request(),[
    		'registration'=>'required'

    	]);


    	$vehicle->is_active=request('is_active');
    	$vehicle->registration=request('registration');
    	$vehicle->save();

    	return redirect()->route('users.show',['user'=>$user->id])->with('warning', 'Vehicle Edited');

    }
}
