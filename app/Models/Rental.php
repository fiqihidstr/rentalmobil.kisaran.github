<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'tgl_mulai',
        'tgl_selesai',
        'tipe_durasi',
        'jumlah_durasi',
        'total_harga',
        'metode_pembayaran',
        'down_payment',
        'status_pembayaran',
        'status_rental',
    ];

    // Relasi: Transaksi ini milik siapa (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi: Transaksi ini menyewa mobil apa (Car)
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}