<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{

    use HasFactory;
    protected $fillable = [
        'student_id',
        'value',
        'awarded_at',
    ];

    protected $dates = [
        'awarded_at',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}