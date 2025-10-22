<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $fillable = [
        'sk_cpns',
        'sk_pns',
        'sk_gaji_berkala',
        'sk_pangkat_terakhir',
        'sk_jabatan',
        'file_sk',
        'users_id',
        'admins_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admins_id');
    }
}
