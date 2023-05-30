<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    public function user(){
        return $this -> belongsTo(User::class, 'user_id');
    }

    public function program(){
        return $this -> belongsTo(Programs::class, 'program_id');
    }

    public function semester(){
        return $this -> belongsTo(Semester::class, 'semester_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'student_courses', 'student_id', 'course_id');
    }

    public function marks()
    {
        return $this->hasMany(Marks::class, 'student_id');
    }
}
