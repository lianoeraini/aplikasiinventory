<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = "jurnal";
    protected $fillable = ['no_jurnal', 'keterangan', 'tgl_jurnal', 'nm_akun', 'debit', 'kredit'];
}
