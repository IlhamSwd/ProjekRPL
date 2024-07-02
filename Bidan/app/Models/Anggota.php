<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = ['url_anggota', 'nama', 'jenis_kelamin', 'nomor_hp', 'alamat', 'tempat_lahir', 'tgl_lahir', 'pekerjaan'];
}
