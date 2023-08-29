<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porter extends Model
{
    protected $fillable = [
        'user_id',
        'nama',
        'no_hp',
        'alamat',
        'role',
        'jk',
        'skkb',
        'ktp'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
