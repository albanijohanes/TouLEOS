<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    protected $fillable = [
        'merchant_id',
        'tanggal',
        'title',
        'deskripsi',
        'harga',
        'satuan'
    ];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}
