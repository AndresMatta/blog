<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Genre extends Model
{
    //
    protected $table = "genres";

    protected $fillable = ['genre'];
}
