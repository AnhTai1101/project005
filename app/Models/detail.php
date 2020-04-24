<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table = "detail";
    public function size()
    {
        return $this->belongsTo('App\Models\size', 'size_id', 'id');
    }
    public function color()
    {
        return $this->belongsTo('App\Models\color', 'color_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\product', 'product_id', 'id');
    }
}
