<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Holidays;
use Illuminate\Http\Request;

class HolidaysRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $holidays = Holidays::all();
        return view('admin.components.holidays.index', compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.holidays.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $holidays = new Holidays();
        $holidays -> name = $request -> input('name');
        $holidays -> start_date = $request -> input('start_date');
        $holidays -> end_date = $request -> input('end_date');
        $holidays -> save();

        return redirect() -> route('holidays') -> with('success', 'Holiday added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $holidays = Holidays::findOrFail($id);
        return view('admin.components.holidays.show', compact('holidays'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $holidays = Holidays::findOrFail($id);
        return view('admin.components.holidays.edit', compact('holidays'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $holidays = Holidays::findOrFail($id);
        $holidays -> name = $request -> input('name');
        $holidays -> start_date = $request -> input('start_date');
        $holidays -> end_date = $request -> input('end_date');
        $holidays -> save();

        return redirect() -> route('holidays') -> with('success', 'Holiday updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $holidays = Holidays::findOrFail($id);
        $holidays -> delete();

        return redirect() -> route('holidays') -> with('danger', 'Holiday deleted successfully');
    }
}
