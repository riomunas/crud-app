<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTransaksiKlaim extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_transaksi_klaim';
    protected $primaryKey = 'kode_transaksi_klaim';
    
}