<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    // protected $primaryKey = 'nomor_surat';

    protected $fillable = ['id_transaksi', 'nama_obat', 'jumlah', 'total_harga', 'role_transaksi', 'waktu_transaksi'];
    public $timestamps = false;
}
