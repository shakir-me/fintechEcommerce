<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_name',
        'product_slug',
        'category_id',
        'subcategory_id',
        'brand_id',
        'product_code',
        'product_price',
        'buying_price',
        'discount_rate',
        'discount_price',
        'thumbnail',
        'images',
        'specification',
        'description',
        'tag',
        'is_admin',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the phone.
     */
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    /**
     * Get the user that owns the phone.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }


    /**
     * Get the user that owns the phone.
     */
    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    /**
     * Get the user that owns the phone.
     */
    public function wishlist()
    {
        return $this->belongsTo(WishList::class);
    }


    public function orderItems()
    {
    
        return $this->hasMany('App\Models\Admin\OrderDetails','product_id');
    }

    


}
