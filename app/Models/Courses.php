<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function program(){
        return $this -> belongsTo(Programs::class, 'program_id');
    }

    public function semester(){
        return $this -> belongsTo(Semester::class, 'semester_id');
    }

    public function marks()
    {
        return $this->hasMany(Marks::class, 'course_id');
    }
}
