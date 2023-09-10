<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Porter extends Model
{
    use Notifiable;

    protected $fillable = [
        'user_id',
        'alamat',
        'email',
        'skkb',
        'ktp',
        'porter_id',
        'status',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function serviceRequests(){
        return $this->hasMany(Servicerequest::class, 'porter_id');
    }
}
