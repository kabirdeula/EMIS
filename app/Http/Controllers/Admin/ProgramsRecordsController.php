<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Programs;
use Illuminate\Http\Request;

class ProgramsRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Programs::all();
        return view('admin.components.programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'code' => 'required',
        ]);

        $programs = new Programs;
        $programs -> name = $request -> input('name');
        $programs -> code = $request -> input('code');
        $programs -> save();

        return redirect() -> route('programs') -> with('success', 'Program added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $programs = Programs::findOrFail($id);
        return view('admin.components.programs.show', compact('programs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $programs = Programs::findOrFail($id);
        return view('admin.components.programs.edit', compact('programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $programs = Programs::findOrFail($id);
        $programs -> name = $request -> input('name');
        $programs -> code = $request -> input('code');
        $programs -> save();

        return redirect() -> route('programs') -> with('success', 'Program updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $programs = Programs::findOrFail($id);
        $programs -> delete();

        return redirect() -> route('programs') -> with('success', 'Program deleted successfully');
    }
}
