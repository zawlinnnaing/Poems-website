<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = 'tbl_tags';
    protected $fillable = ['tags'];
}
