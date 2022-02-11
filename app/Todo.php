<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['task','deadline'];
    protected $dates = [
        'deadline',
    ];
}
