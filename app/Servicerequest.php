<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicerequest extends Model
{
    protected $fillable = [
        'porter_id',
        'customer_id',
        'order_code',
        'order_date',
        'start_time',
        'price',
        'status'
    ];

    public function porter()
    {
        return $this->belongsTo(Porter::class, 'porter_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
