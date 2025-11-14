<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use App\Models\penyewa;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        return mobil::with('penyewa')->get();
    }

    public function store(Request $request)
    {
        $mobil = mobil::create($request->all());
        return response()->json($mobil, 201);
    }

    public function show($id)
    {
        return mobil::with('penyewa')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $mobil = mobil::findOrFail($id);
        $mobil->update($request->all());
        return response()->json($mobil);
    }

    public function destroy($id)
    {
        $mobil = mobil::findOrFail($id);
        $mobil->delete();
        return response()->json(['message' => 'Mobil deleted']);
    }
}
