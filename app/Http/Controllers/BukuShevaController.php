<?php

namespace App\Http\Controllers;

use App\Models\BukuSheva;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BukuShevaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $bukuSheva = BukuSheva::latest()->paginate(5);
        return view('bukusheva.index',compact('bukusheva'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('bukusheva.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'TahunTerbit' => 'required',
            'JumlahStok' => 'required',
            'DendaBuku' => 'required',
        ]);

        $input = $request->all();

        BukuSheva::create($input);

        return redirect()->route('bukusheva.index')
                        ->with('Success!','Buku Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BukuSheva $bukuSheva): View
    {
        return view('bukusheva.show',compact('bukusheva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuSheva $bukuSheva): View
    {
        return view('bukusheva.edit',compact('bukusheva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuSheva $bukuSheva): RedirectResponse
    {
        $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'TahunTerbit' => 'required',
            'JumlahStok' => 'required',
            'DendaBuku' => 'required',
        ]);

        $input = $request->all();

        $bukuSheva->update($input);

        return redirect()->route('bukusheva.index')
                        ->with('Success!','Buku Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuSheva $bukuSheva): RedirectResponse
    {
        $bukuSheva->delete();

        return redirect()->route('bukusheva.index')
                        ->with('Success!','Buku Deleted Successfully');
    }
}
