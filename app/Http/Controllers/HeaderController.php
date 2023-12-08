<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.header.index', [
            'headers' => Header::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $header = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'bg_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/'), $filename);
            $header['image'] = $filename;
        }

        Header::create($header);
        return redirect()
            ->route('admin.header.index')
            ->with('success', 'Header muvaffaqiyatli yaratildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.header.show', [
            'header' => Header::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.header.edit', [
            'header' => Header::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $header = Header::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'bg_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/'), $filename);
            $data['image'] = $filename;
            if ($header->image) {
                unlink(public_path('assets/img/' . $header->image));
            }
        }

        $header->update($data);
        return redirect()
            ->route('admin.header.index')
            ->with('success', 'Header muvaffaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $header = Header::findOrFail($id);
        if ($header->image) {
            unlink(public_path('assets/img/' . $header->image));
        }
        $header->delete();
        return redirect()
            ->route('admin.header.index')
            ->with('success', 'Header muvaffaqiyatli o`chirildi!');
    }
}
