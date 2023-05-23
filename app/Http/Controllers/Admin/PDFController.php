<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class PDFController extends Controller
{
    public function UsersPDF()
    {
        // Fetching table data from the database.
        $users = User::all();

        $pdf = new Dompdf();
        $pdf -> loadHtml(View::make('admin.components.pdf.users')->with('users', $users)->render());
        // $pdf -> loadHtml(View::make('admin.components.pdf.users')->with('users', $users)->render());
        // $pdf -> loadHtml(view('admin.components.pdf.users', $users))->render();

        $pdf -> setPaper('A4', 'portrait');

        $pdf -> render();

        $pdf -> stream('users.pdf');
    }
}
