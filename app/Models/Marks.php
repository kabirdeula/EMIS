<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;

    protected $table = 'marks';

    protected $fillable = [
        'student_id',
        'course_id',
        'marks'
    ];

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

}
