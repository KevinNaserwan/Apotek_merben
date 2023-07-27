<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    // protected $primaryKey = 'nomor_surat';

    protected $fillable = ['kategori', 'role_obat'];
    public $timestamps = false;

    public function obat()
    {
        return $this->hasOne(Obat::class, 'role_obat', 'role_obat');
    }
}
