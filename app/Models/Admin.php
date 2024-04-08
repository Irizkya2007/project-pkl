<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = [
        'tanggal', 'nama_petugas', 'nomor_etiket', 'diagnosa', 'kategori_permasalahan', 'solusi', 'lanjutan'
    ];
}
