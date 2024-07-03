<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ['url_pasien', 'nama', 'jenis_kelamin', 'nomor_hp', 'alamat', 'tempat_lahir', 'tgl_lahir', 'keluhan'];
}
