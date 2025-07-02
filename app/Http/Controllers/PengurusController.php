<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pengurus;
use App\Models\Jabatan;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::with('jabatan')->get();
        return view('admin.pengurus', compact('pengurus'));
    }


    public function create()
    {
        $jabatan = Jabatan::all();
        return view('admin.tambah_pengurus', compact('jabatan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate ([
            'nama_lengkap'  => 'required|max:255',
            'foto'          => 'required|image|mimes:jpg, png, jpeg, webp, svg',
            'id_jabatan'    => 'required',
            'prodi'         => 'required|max:255',
            'angkatan'      => 'required|number'
        ]);

        Pengurus::create([
            'nama_lengkap'  => $request->nama_lengkap,
            'foto'          => $request->file('foto')->store('foto-pengurus'),
            'id_jabatan'    => $request->id_jabatan,
            'prodi'         => $request->prodi,
            'angkatan'      => $request->angkatan,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        return redirect('pengurus')->with('success','Pengurus baru berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $pengurus = Pengurus::findOrFail($id);
        //Hapus Gambar Artikel jika ada
        if ($pengurus->foto) {
            Storage::delete($pengurus->foto);
        }
        //Hapus Artikel
        $pengurus->delete();

        return redirect('/pengurus')->with('success','Pengurus berhasil dihapus!');
    }
}
