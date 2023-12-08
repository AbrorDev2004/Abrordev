<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interest;

class InterestController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.interest.index',[
            'interests' => Interest::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.interest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Interest::create($request->all());
        return redirect()->route('admin.interest.index');
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
        return view('admin.interest.edit',[
            'interest' => Interest::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Interest::findOrFail($id)->update($request->all());
        return redirect()->route('admin.interest.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Interest::findOrFail($id)->delete();
        return redirect()->route('admin.interest.index');
    }
}
