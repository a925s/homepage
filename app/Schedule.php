<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'title',
        'start_date',
        'start_time'
    ];

    public static $rules = [
        'title' => 'required',
        'start_date' => 'required|date|after:yesterday',
        'start_time' => 'required|date_format:H:i'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
