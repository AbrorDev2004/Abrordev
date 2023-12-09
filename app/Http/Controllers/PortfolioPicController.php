<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioPic;

class PortfolioPicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.portfolio-pic.index', [
            'pictures' => PortfolioPic::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolio-pic.create', [
            'portfolios' => Portfolio::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pictures = $request->all();

        if ($request->hasFile('image')) {
            //image multiple
            $files = $request->file('image');
            foreach ($files as $file) {
                $filename = 'portfolio_detail_' . time() . $file->getClientOriginalName();
                $file->move(public_path('assets/img/portfolio/'), $filename);
                $pictures['image'] = $filename;
                PortfolioPic::create($pictures);
            }
        }

        return redirect()
            ->route('admin.portfolio-pic.index')
            ->with('success', 'Portfolio rasm muvaffaqiyatli yaratildi!');
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
        return view('admin.portfolio-pic.edit', [
            'pictures' => \App\Models\PortfolioPic::findOrFail($id),
            'portfolios' => \App\Models\Portfolio::all(),
        ]);        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $picture = PortfolioPic::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'portfolio_detail_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/portfolio/'), $filename);
            $data['image'] = $filename;
            if ($picture->image) {
                unlink(public_path('assets/img/portfolio/' . $picture->image));
            }
        }

        $picture->update($data);
        return redirect()
            ->route('admin.portfolio-pic.index')
            ->with('success', 'Portfolio rasm muvaffaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $picture = PortfolioPic::findOrFail($id);
        $picture->delete();
        return redirect()
            ->route('admin.portfolio-pic.index')
            ->with('success', 'Portfolio rasm muvaffaqiyatli o`chirildi!');
    }
}
