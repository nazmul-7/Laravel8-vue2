<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'contact',
        'company',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postcode',
        'country',
    ];
}
