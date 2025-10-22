<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    protected $fillable = [
        'nip',
        'tanggal_sk',
        'nomor_sk',
        'tmt_golongan',
        'tempat_lahir',
        'agama',
        'nomor_pertek_bkn',
        'masa_gk_bulan',
        'masa_gk_tahun',
        'golongan_ruang',
        'users_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
