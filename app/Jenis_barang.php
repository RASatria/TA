<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_barang extends Model
{
    protected $table = 'jenis_barang';
    protected $primaryKey = 'id_jenis';
    protected $fillable = ['ket_jenis'];
}
