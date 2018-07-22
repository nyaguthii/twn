<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentType;

class PaymentTypesController extends Controller
{
    public function index(){

    	$paymentTypes=PaymentType::all();

    	return view('types.index',['paymentTypes'=>$paymentTypes]);
    }

    public function create(){

    	return view('types.create');
    }
    public function store(){

    	$this->validate(request(),[

    		'name'=>'required'
    	]);

    	$type=new PaymentType();
    	$type->name=request('name');
    	$type->is_active=true;

    	$type->save();

    	return redirect()->route('types.index')->with('success', 'PaymentType Created');

    }

    public function edit(PaymentType $paymentType){

    	return view('types.edit',['paymentType'=>$paymentType]);


    }

    public function update(PaymentType $paymentType){

    	$this->validate(request(),[
    		'name'=>'required'

    	]);


    	$paymentType->is_active=request('is_active');
    	$paymentType->name=request('name');
    	$paymentType->save();

    	return redirect()->route('types.index')->with('warning', 'Payment Type updated');

    }
}
