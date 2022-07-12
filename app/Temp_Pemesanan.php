<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temp_Pemesanan extends Model
{
    protected $table = "temp_pemesanan";
    protected $fillable = ['kd_brg', 'qty_pesan'];
}
