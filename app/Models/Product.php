<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    public function prices(){
        return $this->hasMany(ProductPrice::class, 'product_id');
    }
    public function variations(){
        return $this->hasMany(ProductVariation::class, 'product_id');
    }

   
}
