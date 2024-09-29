<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index()
    {
        $kontens = Konten::all();
        return view('konten.index', compact('kontens'));
    }

    public function create()
    {
        return view('konten.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'caption' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'jenis' => 'required|string|max:255',
            //'path' => 'required|string',
            'status' => 'boolean',
        ]);

        $imagePath = $request->file('gambar')->store('images', 'public');

        Konten::create([
            'judul' => $request->judul,
            'caption' => $request->caption,
            'gambar' => $imagePath,
            'jenis' => $request->jenis,
            'path' => '',
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('konten.index')->with('success', 'Konten created successfully.');
		
    }

    public function show(Konten $konten)
    {
        return view('konten.show', compact('konten'));
    }

    public function edit(Konten $konten)
    {
        return view('konten.edit', compact('konten'));
    }

    public function update(Request $request, Konten $konten)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'caption' => 'required|string',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:2048',
            'jenis' => 'required|string|max:255',
            'path' => 'required|string',
            'status' => 'boolean',
        ]);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $konten->gambar = $imagePath;
        }

        $konten->update($request->only('judul', 'caption', 'jenis', 'path', 'status'));

        return redirect()->route('konten.index')->with('success', 'Konten updated successfully.');
    }

   public function destroy($id)
{
    $konten = Konten::findOrFail($id); // Find the content by ID
    $konten->delete(); // Delete the content

    return redirect()->back()->with('success', 'Konten berhasil dihapus.'); // Redirect with a success message
}
}
