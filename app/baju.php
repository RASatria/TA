<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baju extends Model
{
    protected $table = 'baju';
    protected $primaryKey = 'id_baju';
    protected $fillable = ['nama_baju','deskripsi','ukuran','harga','quantity','status'];
}
