<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'price',
    ];

    public function item(){
        return $this->hasMany(Item::class);
    }
    public function user(){
        return $this->belongsTo(Item::class);
    }
}
