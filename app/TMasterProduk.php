<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TMasterProduk extends Model
{
    protected $table = 't_master_produk';
    protected $primaryKey = 'kode_produk';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['kode_produk', 'nama_produk', 'activated'];
}