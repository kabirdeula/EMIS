<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    public function user()
    {
        return $this -> belongsTo(User::class, 'user_id');
    }

    public function program(){
        return $this -> belongsTo(Programs::class, 'program_id');
    }

    public function semester(){
        return $this -> belongsTo(Semester::class, 'semester_id');
    }
}
