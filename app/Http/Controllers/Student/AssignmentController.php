<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assignment;

class AssignmentController extends Controller
{
    public function store(Request $request){
        $request -> validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:doc,docx,pdf|max:2048',
        ]);

        $assignment = new Assignment;
        $assignment -> title = $request -> title;
        $assignment -> description = $request -> description;
        $assignment->file_path = $request->file('file')->store('assignments');
        $assignment->save();

        return redirect() -> route('student.home') -> with('success', 'Assignment submitted successfully.');
    }

}
