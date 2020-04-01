<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTransaksiPolis extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_transaksi_polis';
    protected $primaryKey = 'kode_trans_polis';
    
}