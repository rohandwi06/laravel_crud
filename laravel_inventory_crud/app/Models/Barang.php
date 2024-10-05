<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_barang',
        'id_kategori',
        'stok_barang',
    ];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

}
