<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
    return Publikasi::all();
    }
    public function store(Request $request)
    {
    $validated = $request->validate([
    'title' => 'required|string|max:255',
    'releaseDate' => 'required|date',
    'description' => 'nullable|string',
    'coverUrl' => 'nullable|url',
    ]);
    $publikasi = Publikasi::create($validated);
    return response()->json($publikasi, 201);
    }

    public function show($id)
    {
        return Publikasi::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $publikasi = Publikasi::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'releaseDate' => 'required|date',
            'description' => 'nullable|string',
            'coverUrl' => 'nullable|url',
        ]);
        $publikasi->update($validated);
        return response()->json($publikasi);
    }

    public function destroy($id)
    {
        $publikasi = Publikasi::findOrFail($id);
        $publikasi->delete();
        return response()->json(['message' => 'Data dihapus']);
    }

}
