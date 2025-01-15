<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';

    protected $fillable = [
    'nama_lengkap',
    'nomor_telepon',
    'jumlah_peserta',
];

}
