<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mobil',
        'merek',
        'harga_per_hari',
        'status',
        'foto_mobil',
    ];

    // Relasi: Satu mobil bisa disewa berkali-kali
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}