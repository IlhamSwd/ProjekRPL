<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama', 'jumlah', 'data_obat', 'tgl_kadaluarsa', 'keterangan', 'harga'];
}
