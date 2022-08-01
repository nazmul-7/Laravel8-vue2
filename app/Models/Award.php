<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_id',
        'type',
        'name',
        'sponsor_id',
    ];
}
