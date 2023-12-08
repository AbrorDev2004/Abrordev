<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.testimonial.index',[
            'testimonials' => Testimonial::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'Testimonial_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/testimonials/'), $filename);
            $testimonial['image'] = $filename;
        }

        Testimonial::create($testimonial);
        return redirect()
            ->route('admin.testimonial.index')
            ->with('success', 'Testimonial muvaffaqiyatli yaratildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.testimonial.show',[
            'testimonial' => Testimonial::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.testimonial.edit',[
            'testimonial' => Testimonial::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'Testimonial_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/testimonials/'), $filename);
            $data['image'] = $filename;
            // Delete old image
            if ($testimonial->image !== null) {
                unlink(public_path('assets/img/testimonials/' . $testimonial->image));
            }
        }

        $testimonial->update($data);
        return redirect()
            ->route('admin.testimonial.index')
            ->with('success', 'Testimonial muvaffaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($testimonial->image) {
            unlink(public_path('assets/img/testimonials/' . $testimonial->image));
        }
        $testimonial->delete();
        return redirect()
            ->route('admin.testimonial.index')
            ->with('success', 'testimonial muvaffaqiyatli o`chirildi!');
    }
}
