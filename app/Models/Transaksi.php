<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['stok_id', 'pasien_id', 'tgl_transaksi', 'jumlah'];

    public function stok(){
        return $this->belongsTo(Stok::class, 'stok_id');
    }
    public function pasien(){
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
}