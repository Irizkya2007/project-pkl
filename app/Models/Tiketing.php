<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiketing extends Model
{
    use HasFactory;

    protected $table = 'form_tiketing';
    protected $fillable = [
        'email', 'nama', 'lokasi', 'jenis_permasalahan', 'deskripsi_permasalahan', 'bukti_permasalahan'
    ];
}
