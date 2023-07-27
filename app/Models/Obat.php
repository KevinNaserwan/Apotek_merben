<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $primaryKey = 'nama_obat'; // Specify 'nama_obat' as the primary key column
    public $incrementing = false; // Since it's not an auto-incrementing integer, set this to false
    protected $keyType = 'string'; // If 'nama_obat' is of string type, set this to 'string'

    protected $fillable = ['nama_obat', 'gambar_obat', 'data_obat', 'role_obat', 'harga', 'stok_obat', 'status'];
    public $timestamps = false;
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'role_obat', 'role_obat');
    }
}
