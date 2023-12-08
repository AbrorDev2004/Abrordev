<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.resume.index',[
            'resumes' => Resume::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Resume::create($request->all());
        return redirect()
            ->route('admin.resume.index')
            ->with('success', 'Resume created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.resume.show', [
            'resume' => Resume::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.resume.edit', [
            'resume' => Resume::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Resume::findOrFail($id)->update($request->all());
        return redirect()
            ->route('admin.resume.index')
            ->with('success', 'Resume updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Resume::findOrFail($id)->delete();
        return redirect()
            ->route('admin.resume.index')
            ->with('success', 'Resume deleted successfully.');
    }
}
