<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Attendance;
use App\Models\Holidays;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\User;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class PDFController extends Controller
{
    public function AttendancePDF()
    {
        // Fetching table data from the database.
        $attendances = Attendance::all();

        $pdf = new Dompdf();
        $pdf -> loadHtml(View::make('admin.components.pdf.attendances')->with('attendances', $attendances)->render());

        $pdf -> setPaper('A4', 'portrait');

        $pdf -> render();

        $pdf -> stream('attendances.pdf');
    }

    public function HolidayPDF()
    {
        // Fetching table data from the database.
        $holidays = Holidays::all();

        $pdf = new Dompdf();
        $pdf -> loadHtml(View::make('admin.components.pdf.holidays')->with('holidays', $holidays)->render());

        $pdf -> setPaper('A4', 'portrait');

        $pdf -> render();

        $pdf -> stream('holidays.pdf');
    }

    public function StudentPDF()
    {
        // Fetching table data from the database.
        $students = Students::all();

        $pdf = new Dompdf();
        $pdf -> loadHtml(View::make('admin.components.pdf.students')->with('students', $students)->render());

        $pdf -> setPaper('A4', 'portrait');

        $pdf -> render();

        $pdf -> stream('students.pdf');
    }

    public function TeacherPDF()
    {
        // Fetching table data from the database.
        $teachers = Teachers::all();

        $pdf = new Dompdf();
        $pdf -> loadHtml(View::make('admin.components.pdf.teachers')->with('teachers', $teachers)->render());

        $pdf -> setPaper('A4', 'portrait');

        $pdf -> render();

        $pdf -> stream('teachers.pdf');
    }

    public function UsersPDF()
    {
        // Fetching table data from the database.
        $users = User::all();

        $pdf = new Dompdf();
        $pdf -> loadHtml(View::make('admin.components.pdf.users')->with('users', $users)->render());

        $pdf -> setPaper('A4', 'portrait');

        $pdf -> render();

        $pdf -> stream('users.pdf');
    }
}
