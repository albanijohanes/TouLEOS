<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicerequest extends Model
{
    protected $fillable = [
        'porter_id',
        'customer_id',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'total',
        'harga',
        'status'
    ];

    public function porter()
    {
        return $this->belongsTo(Porter::class, 'porter_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
