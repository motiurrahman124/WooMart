<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function band()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getDiscountPriceAttribute($discount_price)
    {

        return $this->discount > 0 ? ($this->is_percentage_discount ? ((100 - $this->discount) * $this->price ) /100 : $this->price - $this->discount ) :  $this->price;
        
        // if($this->discount > 0) {
        //     if($this->is_percentage_discount) {

        //         return ((100 - $this->discount) * $this->price ) /100; 
        //     }
        //     return $this->price - $this->discount;
        // }
        // return $this->price;
    }

    public function getPrimaryImageAttribute($primary_image)
    {
        return asset($primary_image);
    }

}
