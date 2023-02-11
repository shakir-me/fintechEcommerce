<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo('App\Models\Admin\Order','order_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Admin\Product','product_name');
    }

    public function review()
    {
        return $this->hasOne('App\Models\Review','order_detail_id');
    }
}
