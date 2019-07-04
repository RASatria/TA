<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembuatan extends Model
{
    protected $table = 'pembuatan';
    protected $primaryKey = 'id_pembuatan';
    protected $fillable = ['keterangan','file','status','id_pengguna','id_bahan','id_sablon'];
}
