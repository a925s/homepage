<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'catchcopy',
        'message',
        'image_name',
        'image_path'

    ];

    public static $rules = [
        'name' => 'required',
        'catchcopy' => 'required',
        'message' => 'required'
    ];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function schedules()
    {
        return $this->belongsToMany('App\Schedule');
    }
}
