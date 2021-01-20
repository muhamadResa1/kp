<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APBU extends Model
{
    protected $fillable = ["kode_apbu", "nama_apbu", "nominal", "tahun_akademik"];
}
