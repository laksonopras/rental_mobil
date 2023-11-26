<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'qty',
        'capacity',
        'transmission',
        'fuel',
        'rate',
        'price',
    ];
}
