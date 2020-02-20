<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name', 'address', 'postcode', 'city','state', 'country','phone','email'];



    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
