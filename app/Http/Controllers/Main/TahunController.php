<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = "Tahun Akademik";
        $data['result'] =  TahunAkademik::orderBy('tahun_akademik_id', 'DESC')->get();
        return view("main.tahun.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Create Tahun Akademik";
        return view("main.tahun.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $this->validate(
            $request,
            [
                'nama_tahun' => 'required',
                'status' => 'required'
            ],
            [
                'status.required' => 'Nama Kosong !',
                'nama_tahun.required' => 'Nama Kosong !'
            ],
        );
        $objek = TahunAkademik::create([
            'nama_tahun' => $request->nama_tahun,
            'status' => $request->status,
        ]);
        return redirect('main/tahun')->with('success', 'Data berhasil disimpan!');
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
        $data['title'] = "Edit Tahun Akademik";
        $data['result'] = TahunAkademik::findOrFail($id);
        return view("main.tahun.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = TahunAkademik::find($id);
        $post->nama_tahun = $request->nama_tahun;
        $post->status = $request->status;
        $post->save();

        return redirect('main/tahun')->with('success', 'Data berhasil diubah!');
        // return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tahun = TahunAkademik::findOrFail($id);
        $tahun->delete();
        return back()->with('success', 'Data sudah di Hapus!');
    }
}