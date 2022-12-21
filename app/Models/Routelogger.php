<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routelogger extends Model
{
    use HasFactory;

    protected $fillable = [
        'route',
        'ip',
        'agent',
        'user_id',

    ];
}
