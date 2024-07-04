<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = "Kelas";
        $data['result'] =  Kelas::orderBy('kelas_id', 'DESC')->get();
        return view("main.kelas.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Create Kelas";
        return view("main.kelas.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $this->validate(
            $request,
            [
                'nama_kelas' => 'required'
            ],
            [
                'nama_kelas.required' => 'Nama Kosong !'
            ],
        );
        $objek = Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);
        return redirect('main/kelas')->with('success', 'Data berhasil disimpan!');
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
        $data['title'] = "Edit Kelas";
        $data['result'] = Kelas::findOrFail($id);
        return view("main.kelas.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Kelas::find($id);
        $post->nama_kelas = $request->nama_kelas;
        $post->save();

        return redirect('main/kelas')->with('success', 'Data berhasil diubah!');
        // return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return back()->with('success', 'Data sudah di Hapus!');
    }
}
