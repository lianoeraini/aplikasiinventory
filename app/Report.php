<?php

namespace App;
    

use Illuminate\Database\Eloquent\Model;
    

class Report extends Model
{
    //jika tidak di definisikan, maka primary akan terdetek id 
    protected $table = "reports";
    protected $fillable=['date','nm_brg','kd_brg','type', 'stok'];
}
