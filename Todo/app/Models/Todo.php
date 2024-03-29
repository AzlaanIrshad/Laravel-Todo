<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'todo',
        'time',
        'completed',
        'created_at',
        'priority',
    ];

    public $timestamps = false;
}
