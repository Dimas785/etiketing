<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'konser_id',
        'user_id',
        'nama',
        'email',
        'no_hp',
        'jumlah_tiket',
        'total_harga',
        'status',
    ];

    public function konser()
    {
        return $this->belongsTo(Konser::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
