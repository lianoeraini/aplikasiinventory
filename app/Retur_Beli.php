<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retur_Beli extends Model
{
    protected $table = "retur__beli";
    protected $fillable = ['no_retur', 'tgl_retur', 'total_retur'];
}
