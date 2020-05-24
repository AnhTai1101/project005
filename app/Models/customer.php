<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    public function bill()
    {
        return $this->hasOne('App\Models\bill', 'customer_id', 'id');
    }
}
