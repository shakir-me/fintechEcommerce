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
    public function order_details()
    {
        return $this->hasMany(OrderDetails::class);
    }
}
