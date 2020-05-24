<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = 'bill';
    public function customer()
    {
        return $this->belongsTo('App\Models\customer', 'customer_id', 'id');
    }
    public function bill_detail()
    {
        return $this->hasMany('App\Models\bill_detail', 'bill_id', 'id');
    }

}
