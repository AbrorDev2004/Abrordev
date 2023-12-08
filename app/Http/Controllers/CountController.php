<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.count.index',[
            'counts' => Count::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.count.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Count::create($request->all());
        return redirect()
            ->route('admin.count.index')
            ->with('success', 'Count created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.count.edit', [
            'count' => Count::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Count::findOrFail($id)->update($request->all());
        return redirect()
            ->route('admin.count.index')
            ->with('success', 'Count updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Count::findOrFail($id)->delete();
        return redirect()
            ->route('admin.count.index')
            ->with('success', 'Count deleted successfully.'); 
    }
}
