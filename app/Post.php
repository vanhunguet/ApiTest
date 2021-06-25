<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','number'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
