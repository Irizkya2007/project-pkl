<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        
        'email',
        'nama',
        'lokasi',
        'jenis_permaslahan',
        'deskripsi_permasalahan',
        'bukti_permasalahan',
    ];
}
