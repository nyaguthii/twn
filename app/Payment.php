<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function vehicle(){
    	return $this->belongsTo(Vehicle::class);
    }

    public function paymentType(){
    	return $this->belongsTo(PaymentType::class);
    }
}
