<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'alamat',
        'no_phone',
    ];

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
