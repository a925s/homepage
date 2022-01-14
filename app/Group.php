<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'message',
    ];

    public static $rules = [
        'message' => 'required'
    ];
}
