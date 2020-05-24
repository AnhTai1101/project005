<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table = 'bill_detail';
    public function bill()
    {
        return $this->hasOne('App\Models\bill', 'bill_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\product', 'product_id', 'id');
    }
}
