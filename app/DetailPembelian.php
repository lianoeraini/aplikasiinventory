<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    protected $table = "detail_pembelian";
    protected $fillable = ['no_beli', 'kd_brg', 'qty_beli', 'sub_beli'];
}
