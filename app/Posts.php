<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['question','A','B','C','D','Answer'];
    protected $dates = ['created_at'.'updated_at'];
}
