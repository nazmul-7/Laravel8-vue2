<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name',
        'club_id',
        'phone',
        'city',
        'address',
        'logo',
        'cover',
        'fees',
        'fees_type',
    ];

    public function coachRequested(){
        return $this->hasOne(AcademyCoachRequest::class, 'academy_id', 'id');
    }
}
