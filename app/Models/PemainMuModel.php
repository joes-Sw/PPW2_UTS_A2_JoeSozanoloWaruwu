<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemainMuModel extends Model
{
    use HasFactory;

    protected $table = 'pemainmu';

    protected $fillable = [
        'nama_pemain',
        'no_punggung',
        'posisi'
    ];
}
