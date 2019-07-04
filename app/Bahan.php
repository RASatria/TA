<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $table = 'bahan';
    protected $primaryKey = 'id_bahan';
    protected $fillable = ['nama_bahan','warna','ukuran','harga_produk','harga_panjang'];
}
