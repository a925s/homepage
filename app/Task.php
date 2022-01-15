<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'user_id'
    ];

    public static $rules = [
        'question' => 'required',
        'answer' => 'required',
        'user_id' => 'required'
    ];
}
