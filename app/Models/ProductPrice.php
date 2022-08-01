<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id' ,
        'sku' ,
        'quantity',
        'paper_size' ,
        'finished_size' ,
        'paper_type' ,
        'print_type' ,
        'turnaround' ,
        'print_page_number' ,
        'lamination' ,
        'cover' ,
        'fold_type' ,
        'print_orientation' ,
        'product_finishing' ,
        'cut_type' ,
        'sets' ,
        'vat_rate' ,
        'price' ,
        'spot_uv' ,

    ];

    protected $casts = [
        'price' => 'float',
        'vat_rate' => 'float',
        'quantity' => 'int',

     ];
}
