<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "color";
    protected $fillable = ['nom_color'];
}
