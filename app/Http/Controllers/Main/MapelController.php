<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Kelompok;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = "Mapel";
        $kelompok = Mapel::with('kelompok', 'user')->get();
        $data['result'] = $kelompok->sortDesc();
        return view("main.mapel.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['user'] = User::all();
        $data['kelompok'] = Kelompok::all();
        $data['title'] = "Create mapel";
        return view("main.mapel.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $this->validate(
            $request,
            [
                'nama_mapel' => 'required',
                'sks' => 'required|integer',
                'kelompok_id' => 'required|integer',
                'user_id' => 'required|integer',
            ],
            [
                'nama_mapel.required' => 'Nama Kosong !',
                'sks.required' => 'SKS Kosong !',
                'sks.integer' => 'SKS harus berupa angka !',
                'kelompok_id.required' => 'Kelompok ID Kosong !',
                'kelompok_id.integer' => 'Kelompok ID harus berupa angka !',
                'user_id.required' => 'Guru ID Kosong !',
                'user_id.integer' => 'Guru ID harus berupa angka !',
            ]
        );

        $mapel = Mapel::create([
            'nama_mapel' => $request->nama_mapel,
            'sks' => $request->sks,
            'kelompok_id' => $request->kelompok_id,
            'user_id' => $request->user_id,
        ]);

        return redirect('main/mapel')->with('success', 'Data berhasil disimpan!');
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
        $data['user'] = User::all();
        $data['kelompok'] = Kelompok::all();
        $data['title'] = "Edit Mapel";
        $data['result'] = Mapel::findOrFail($id);
        return view("main.mapel.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Mapel::find($id);
        $post->nama_mapel = $request->nama_mapel;
        $post->sks = $request->sks;
        $post->user_id = $request->user_id;
        $post->kelompok_id = $request->kelompok_id;
        $post->save();

        return redirect('main/mapel')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapel = Mapel::findOrFail($id);
        $mapel->delete();
        return back()->with('success', 'Data sudah di Hapus!');
    }
}