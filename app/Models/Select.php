<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    use HasFactory;
    protected $fillable = [
        'cars',
    ];

    // way 1 
    // protected function getNameAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    // way 2
    protected function cars(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    }
}
