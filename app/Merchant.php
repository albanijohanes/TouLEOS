<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = [
        'user_id',
        'alamat',
        'email',
        'ktp',
        'siup',
        'status',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class, 'merchant_id');
    }
}
