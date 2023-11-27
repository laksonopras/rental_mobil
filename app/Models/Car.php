<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_pict',
        'merk',
        'stock',
        'capacity',
        'transmission',
        'fuel',
        'rate',
        'price',
    ];
}
