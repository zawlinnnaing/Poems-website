<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //
    protected $table = 'tbl_collections';
    protected $fillable = ['poem_id','title','description'];
}
