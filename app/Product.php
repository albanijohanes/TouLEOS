<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'merchant_id',
        'tanggal',
        'title',
        'deskripsi',
        'harga',
        'satuan'
    ];

    public function merchant(){
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }

    public function serviceRequest(){
        return $this->hasMany(Servicerequest::class, 'product_id');
    }
}
