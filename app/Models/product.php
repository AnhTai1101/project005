<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    // type
    public function type()
    {
        return $this->beLongsTo('App\Models\type', 'type_id', 'id');
    }
    // category
    public function category()
    {
        return $this->belongsTo('App\Models\category', 'category_id', 'id');
    }
    // detail
    public function detail()
    {
        return $this->hasOne('App\Models\detail', 'product_id', 'id');
    }
}
