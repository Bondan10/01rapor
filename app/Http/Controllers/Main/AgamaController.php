<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = "Agama";
        $data['result'] = Agama::all();
        return view("main.agama.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Create Agama";
        return view("main.agama.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $this->validate(
            $request,
            [
                'nama_agama' => 'required'
            ],
            [
                'nama_agama.required' => 'Nama Kosong !'
            ],
        );
        $objek = Agama::create([
            'nama_agama' => $request->nama_agama,
        ]);
        return redirect('main/agama')->with('success', 'Data berhasil disimpan!');
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
        $data['title'] = "Edit Agama";
        $data['result'] = Agama::findOrFail($id);
        return view("main.agama.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Agama::find($id);
        $post->nama_agama = $request->nama_agama;
        $post->save();

        return redirect('main/agama')->with('success', 'Data berhasil diubah!');
        // return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agama = Agama::findOrFail($id);
        $agama->delete();
        return back()->with('success', 'Data sudah di Hapus!');
    }
}