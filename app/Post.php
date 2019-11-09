<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    //if we not use time stamp on database, so then false here
    public $timestamps = false;

    //using static create on route
    protected $fillable = [
        'title',
        'content'
    ];
}
