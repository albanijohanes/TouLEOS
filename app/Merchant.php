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
}
