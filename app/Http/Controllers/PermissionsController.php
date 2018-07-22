<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionsController extends Controller
{
    public function index(){

    	$permissions=Permission::all();

    	return view('permissions.index',['permissions'=>$permissions]);
    }

    public function create(){

    	return view('permissions.create');
    }

    public function store(){

    	$this->validate(request(),[
    		'name'=>'required'
    	]);

    	$permission=new Permission();
    	$permission->name=request('name');

    	$permission->save();

    	return redirect()->route('permissions.index')->with('message', 'Permission created');
    }

    public function destroy(Permission $permission){

    	$permission->delete();

    	return redirect()->route('permissions.index')->with('danger', 'Permission Deleted');


    }

    public function update(Permission $permission){

    	$this->validate(request(),[
    		'name'=>'required'
    	]);

    	$permission->name=request('name');
    	$permission->save();

    	return redirect()->route('permissions.index')->with('warning', 'Permission Update');

    }
}
