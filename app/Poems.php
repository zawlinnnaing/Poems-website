<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poems extends Model
{
    //
    protected $table = 'tbl_poems';
    protected $fillable=['title','content'];
}
