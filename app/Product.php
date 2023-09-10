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

}
