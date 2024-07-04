<?php

namespace App\Http\Controllers\Main;

use App\Models\Gejala;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {

        $data['title'] = "Gejala";
        $data['result'] = Gejala::all();
        return view("main.gejala.index", $data);
    }
    public function tambah()
    {

        $data['title'] = "Tambah Gejala";
        return view("main.gejala.tambah", $data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate(
            $request,
            [
                'nama_gejala' => 'required'
            ],
            [
                'nama_gejala.required' => 'Nama Kosong !'
            ],
            [
                'kode_gejala' => 'required'
            ],
            [
                'kode_gejala.required' => 'Kode Kosong !'
            ],
        );
        $objek = Gejala::create([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);
        return redirect('main/gejala')->with('success', 'Data berhasil disimpan!');

    }
    public function edit($id)
    {
        $data['title'] = "Edit Gejala";
        $data['result'] = Gejala::findOrFail($id);
        return view("main.gejala.edit", $data);
    }
    public function aksi_ubah(Request $request, $id)
    {
        $post = Gejala::find($id);
        $post->kode_gejala = $request->kode_gejala;
        $post->nama_gejala = $request->nama_gejala;
        $post->save();

        return redirect('main/gejala')->with('success', 'Data berhasil diubah!');
    }
    public function hapus($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();
        return back()->with('success', 'Data sudah di Hapus!');

    }
    public function lihat($id)
    {
        $data['title'] = "Lihat Gejala";
        $data['result'] = Gejala::findOrFail($id);
        return view("main.gejala.lihat", $data);
    }
}