<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailRetur extends Model
{
    protected $table = "detail_retur";
    protected $fillable = ['no_retur', 'kd_brg', 'sub_retur', 'qty_retur'];
}
