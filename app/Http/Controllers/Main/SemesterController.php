<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = "Semester";
        $data['result'] =  Semester::orderBy('semester_id', 'DESC')->get();
        return view("main.semester.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Create Semester";
        return view("main.semester.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $this->validate(
            $request,
            [
                'nama_semester' => 'required',
                'status' => 'required'
            ],
            [
                'status.required' => 'Nama Kosong !',
                'nama_semester.required' => 'Nama Kosong !'
            ],
        );
        $objek = Semester::create([
            'nama_semester' => $request->nama_semester,
            'status' => $request->status,
        ]);
        return redirect('main/semester')->with('success', 'Data berhasil disimpan!');
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
        $data['title'] = "Edit Semester";
        $data['result'] = Semester::findOrFail($id);
        return view("main.semester.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Semester::find($id);
        $post->nama_semester = $request->nama_semester;
        $post->status = $request->status;
        $post->save();

        return redirect('main/semester')->with('success', 'Data berhasil diubah!');
        // return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $semester = Semester::findOrFail($id);
        $semester->delete();
        return back()->with('success', 'Data sudah di Hapus!');
    }
}