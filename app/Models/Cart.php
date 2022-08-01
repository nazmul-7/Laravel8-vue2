<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'price_id',
        'file_copies'
    ];

    public function price(){
        return $this->belongsTo(ProductPrice::class, 'price_id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id')->select('id','product_slug','name');
    }

}
