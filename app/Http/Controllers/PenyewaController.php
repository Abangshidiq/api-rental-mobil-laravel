<?php

namespace App\Http\Controllers;

use App\Models\penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index()
    {
        return penyewa::all();
    }

    public function store(Request $request)
    {
        $penyewa = penyewa::create($request->all());
        return response()->json($penyewa, 201);
    }

    public function show($id)
    {
        return penyewa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $penyewa = penyewa::findOrFail($id);
        $penyewa->update($request->all());
        return response()->json($penyewa);
    }

    public function destroy($id)
    {
        $penyewa = penyewa::findOrFail($id);
        $penyewa->delete();
        return response()->json(['message' => 'Penyewa deleted']);
    }
}
