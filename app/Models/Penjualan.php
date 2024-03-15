<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'alamat',
        'no_phone',
    ];

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }
}
