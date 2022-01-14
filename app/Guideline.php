<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guideline extends Model
{
    protected $fillable = [
        'message',
    ];

    public static $rules = [
        'message' => 'required'
    ];
}
