<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porter extends Model
{
    protected $fillable = [
        'user_id',
        'alamat',
        'email',
        'skkb',
        'ktp',
        'porter_id'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
