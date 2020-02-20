<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoicesItem extends Model
{
    protected $fillable=['invoice_id','name','quantity','price'];


    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
