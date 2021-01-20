<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_login extends Model
{
    protected $fillable = ["nama_lengkap","foto", "username", "password", "role", "active"];
}

