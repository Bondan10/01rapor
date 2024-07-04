<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\NilaiHarian;
use App\Models\Semester;
use App\Models\Siswa;
use App\Models\TahunAkademik;
use App\Models\User;
use Illuminate\Http\Request;

class NilaiHarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->user_jab_id == 1) {
            // Jika status jabatan adalah admin, ambil semua data
            $harian = NilaiHarian::with('mapel', 'siswa', 'user', 'tahun_akademik', 'semester')->get();
        } else {
            // Jika bukan admin, ambil data berdasarkan user_id
            $userID = $user->user_id;
            $harian = NilaiHarian::with('mapel', 'siswa', 'user', 'tahun_akademik', 'semester')
                ->where('user_id', $userID)
                ->get();
        }

        $data['title'] = "Nilai Harian";
        $data['result'] = $harian->sortByDesc('created_at');

        return view("main.harian.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data['tahun_akademik'] = TahunAkademik::all();
        $data['semester'] = Semester::all();
        $data['user'] = User::all();
        $data['mapel'] = Mapel::all();
        $data['siswa'] = Siswa::all();
        $data['title'] = "Create Nilai Harian";
        return view("main.harian.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validasi = $this->validate(
            $request,
            [
                'tahun_akademik_id' => 'required|integer',
                'semester_id' => 'required|integer',
                'mapel_id' => 'required|integer',
                'siswa_id' => 'required|integer',
                'user_id' => 'required|integer',
                'pertemuan' => 'required|integer',
                'nilai' => 'required|numeric',
            ],
            [
                'tahun_akademik_id.required' => 'Mapel ID Kosong !',
                'tahun_akademik_id.integer' => 'Mapel ID harus berupa angka !',
                'semester_id.required' => 'Mapel ID Kosong !',
                'semester_id.integer' => 'Mapel ID harus berupa angka !',
                'mapel_id.required' => 'Mapel ID Kosong !',
                'mapel_id.integer' => 'Mapel ID harus berupa angka !',
                'siswa_id.required' => 'Siswa ID Kosong !',
                'siswa_id.integer' => 'Siswa ID harus berupa angka !',
                'user_id.required' => 'User ID Kosong !',
                'user_id.integer' => 'User ID harus berupa angka !',
                'pertemuan.required' => 'Pertemuan Kosong !',
                'pertemuan.integer' => 'Pertemuan harus berupa angka !',
                'nilai.required' => 'Nilai Kosong !',
                'nilai.numeric' => 'Nilai harus berupa angka !',
            ]
        );

        // Membuat data Mapel
        $nilaiharian = NilaiHarian::create([
            'tahun_akademik_id' => $request->tahun_akademik_id,
            'semester_id' => $request->semester_id,
            'mapel_id' => $request->mapel_id,
            'siswa_id' => $request->siswa_id,
            'user_id' => $request->user_id,
            'pertemuan' => $request->pertemuan,
            'nilai' => $request->nilai,
        ]);

        return redirect('main/nilai_harian')->with('success', 'Data berhasil disimpan!');
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
        $data['mapel'] = Mapel::all();
        $data['siswa'] = Siswa::all();
        $data['title'] = "Edit Nilai Harian";
        $data['result'] = NilaiHarian::findOrFail($id);
        return view("main.harian.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = NilaiHarian::find($id);
        $post->mapel_id = $request->mapel_id;
        $post->siswa_id = $request->siswa_id;
        $post->user_id = $request->user_id;
        $post->pertemuan = $request->pertemuan;
        $post->nilai = $request->nilai;
        $post->save();

        return redirect('main/nilai_harian')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapel = NilaiHarian::findOrFail($id);
        $mapel->delete();
        return back()->with('success', 'Data sudah di Hapus!');
    }
}