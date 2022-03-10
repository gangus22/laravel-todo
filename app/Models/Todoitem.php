<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todoitem extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'task',
        'deadline',
        'done'
    ];

    protected $attributes = [
        'done' => false,
    ];

}
