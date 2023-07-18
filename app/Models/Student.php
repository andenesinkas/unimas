<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'gender',
        'birthday',
        'avatar',
        'school',
        'career',
    ];

    public function points()
    {
        return $this->hasMany(Point::class);
    }
}
