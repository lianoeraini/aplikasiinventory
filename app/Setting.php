<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "setting";
    protected $fillable = ['id_setting', 'no_akun', 'nama_transaksi'];
}
