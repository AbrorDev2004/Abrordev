<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialLink;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.link.index', [
            'links' => SocialLink::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.link.create',[
            'abouts' => \App\Models\About::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SocialLink::create($request->all());
        return redirect()->route('admin.link.index');
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
        return view('admin.link.edit', [
            'link' => SocialLink::findOrFail($id),
            'abouts' => \App\Models\About::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SocialLink::findOrFail($id)->update($request->all());
        return redirect()->route('admin.link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SocialLink::findOrFail($id)->delete();
        return redirect()->route('admin.link.index');
    }
}
