<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sablon extends Model
{
   	protected $table = 'sablon';
    protected $primaryKey = 'id_sablon';
    protected $fillable = ['jenis','harga'];
}
