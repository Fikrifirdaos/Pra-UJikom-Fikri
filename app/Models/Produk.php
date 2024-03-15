<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillabel = [
        'product_name',
        'harga',
        'stock',
    ];

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }
}
