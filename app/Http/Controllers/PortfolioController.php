<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.portfolio.index',[
            'portfolios' => Portfolio::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolio.create',[
            'categories' => \App\Models\Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $portfolio = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'portfolio_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/portfolio/'), $filename);
            $portfolio['image'] = $filename;
        }

        Portfolio::create($portfolio);
        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio muvaffaqiyatli yaratildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.portfolio.show',[
            'portfolio' => Portfolio::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.portfolio.edit',[
            'portfolio' => Portfolio::findOrFail($id),
            'categories' => \App\Models\Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'portfolio_' . time() . $file->getClientOriginalName();
            $file->move(public_path('assets/img/portfolio/'), $filename);
            $data['image'] = $filename;
            if ($portfolio->image) {
                unlink(public_path('assets/img/portfolio/' . $portfolio->image));
            }
        }

        $portfolio->update($data);
        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio muvaffaqiyatli yangilandi!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio muvaffaqiyatli o`chirildi!');
    }
}
