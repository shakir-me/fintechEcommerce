<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the phone.
     */


    
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function orderItems()
    {
        return $this->hasMany('App\Models\Admin\OrderDetails');
    }
}
