<?php

namespace App\Http\Controllers;

use App\Models\ServisInfinix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServisInfinixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //tampilkan semua data
        $datas = ServisInfinix::paginate(5);
        return view('servis.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required|max:100',
            'merek_hp' => 'required|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kerusakan' => 'required',
            'tanggal' => 'required',
            'biaya_servis' => 'required'
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }


        ServisInfinix::create([
            'nama_pemilik' => $request->nama_pemilik,
            'merek_hp' => $request->merek_hp,
            'image' => $imagePath,
            'kerusakan' => $request->kerusakan,
            'tanggal' => $request->tanggal,
            'biaya_servis' => $request->biaya_servis
        ]);
        return redirect()->route('data-servis-infinix.index');
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
        $edit = ServisInfinix::findOrFail($id);
        return view('servis.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = ServisInfinix::findOrFail($id);
        $request->validate([
            'nama_pemilik' => 'required|max:100',
            'merek_hp' => 'required|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kerusakan' => 'required',
            'tanggal' => 'required',
            'biaya_servis' => 'required'
        ]);

        if ($update->image && Storage::disk('public')->exists($update->image)) {
            Storage::disk('public')->delete($update->image);
        }

        // Handle image upload (optional)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $update->image = $imagePath;
        }

        $update->update([
            'nama_pemilik' => $request->nama_pemilik,
            'merek_hp' => $request->merek_hp,
            'kerusakan' => $request->kerusakan,
            'tanggal' => $request->tanggal,
            'biaya_servis' => $request->biaya_servis
        ]);
        return redirect()->route('data-servis-infinix.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = ServisInfinix::findOrFail($id);
        $delete->delete();
        return redirect()->route('data-servis-infinix.index');
    }
}
