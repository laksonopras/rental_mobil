<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'car_id',
        'check_in',
        'check_out',
        'price',
    ];

    public function car(){
        return $this->hasMany(Car::class);
    }
    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }
}
