<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    //
    protected $table = 'tbl_keys';
    protected $fillable = ['user_id','poem_id','author_id'];
}
