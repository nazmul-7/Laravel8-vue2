<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id' ,
        'name'
    ];

    public function values(){
        return $this->hasMany(ProductVariationValue::class, 'pvariation_id');
    }
}
