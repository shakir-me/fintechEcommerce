<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = array();
    protected $table = 'orders';



    protected $fillable = [
        'order_no',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function orderItems()
    {
        return $this->hasMany('App\Models\Admin\OrderDetails');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_name');
    }

}
