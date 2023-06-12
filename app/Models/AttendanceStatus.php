<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceStatus extends Model
{
    use HasFactory;

    protected $table = 'attendance_statuses';

    protected $fillable = [
        'student_id',
        'percentage',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }
}
