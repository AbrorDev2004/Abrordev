<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.about.index',[
            'abouts' => About::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $about = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'me_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/'), $filename);
            $about['image'] = $filename;
        }

        About::create($about);
        return redirect()
            ->route('admin.about.index')
            ->with('success', 'About muvaffaqiyatli yaratildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.about.show',[
            'about' => About::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.about.edit',[
            'about' => About::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'me_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/'), $filename);
            $data['image'] = $filename;
            if ($about->image) {
                unlink(public_path('assets/img/' . $about->image));
            }
        }

        $about->update($data);
        return redirect()
            ->route('admin.about.index')
            ->with('success', 'About muvaffaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
        if ($about->image) {
            unlink(public_path('assets/img/' . $about->image));
        }
        $about->delete();
        return redirect()
            ->route('admin.about.index')
            ->with('success', 'About muvaffaqiyatli o`chirildi!');
    }
}
