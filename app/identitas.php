<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class identitas extends Model
{
    protected $table='identitas';

    protected $fillable = ['nama','email','telepon'];
}
