<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'message',
    ];

    public static $rules = [
        'title' => 'required',
        'message' => 'required'
    ];
}
