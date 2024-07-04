<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Agama;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user();

        if ($user->user_jab_id == 1 || $user->user_jab_id == 2 || $user->user_jab_id == 3 || $user->user_jab_id == 4) {
            // Jika status jabatan adalah admin dan guru, ambil semua data
            $siswa = Siswa::with('kelas', 'agama')->get();
        } else {
            // Jika bukan admin dan guru, ambil data berdasarkan kelas_id
            $kelas = $user->kelas_id;
            $siswa = Siswa::with('kelas', 'agama')
                ->where('kelas_id', $kelas)
                ->get();
        }
        $data['title'] = "Siswa";
        // $siswa = Siswa::with('kelas', 'agama')->get();
        $data['result'] = $siswa->sortDesc();
        return view("main.siswa.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['kelas'] = Kelas::all();
        $data['agama'] = Agama::all();
        $data['title'] = "Create siswa";
        if (auth()->check() && auth()->user()->user_jab_id == 1) {
            return view("main.siswa.create", $data);
        } else {
            return redirect('main/siswa')->with('success', 'Maaf Anda tidak Punya AKses Kesitu!');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $this->validate(
            $request,
            [
                'nis' => 'required',
                'password' => 'required|min:6',
                'nama' => 'required',
                'sex' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'agama_id' => 'required',
                'status' => 'required',
                'anak_ke' => 'required',
                'alamat' => 'required',
                'sekolah_asal' => 'required',
                'kelas_id' => 'required',
                'tanggal_masuk' => 'required',
                'ayah' => 'required',
                'ibu' => 'required',
                'pekerja_ayah' => 'required',
                'pekerja_ibu' => 'required'
            ],
            [
                'nis.required' => 'NIS Kosong !',
                'password.required' => 'Password Kosong !',
                'password.min' => 'Password minimal 6 karakter !',
                'nama.required' => 'Nama Kosong !',
                'sex.required' => 'Jenis Kelamin Kosong !',
                'tempat_lahir.required' => 'Tempat Lahir Kosong !',
                'tanggal_lahir.required' => 'Tanggal Lahir Kosong !',
                'agama_id.required' => 'Agama Kosong !',
                'status.required' => 'Status Kosong !',
                'anak_ke.required' => 'Anak Ke Kosong !',
                'alamat.required' => 'Alamat Kosong !',
                'sekolah_asal.required' => 'Sekolah Asal Kosong !',
                'kelas_id.required' => 'Kelas ID Kosong !',
                'tanggal_masuk.required' => 'Tanggal Masuk Kosong !',
                'ayah.required' => 'Nama Ayah Kosong !',
                'ibu.required' => 'Nama Ibu Kosong !',
                'pekerja_ayah.required' => 'Pekerjaan Ayah Kosong !',
                'pekerja_ibu.required' => 'Pekerjaan Ibu Kosong !'
            ]
        );

        $siswa = Siswa::create([
            'nis' => $request->nis,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'sex' => $request->sex,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama_id' => $request->agama_id,
            'status' => $request->status,
            'anak_ke' => $request->anak_ke,
            'alamat' => $request->alamat,
            'sekolah_asal' => $request->sekolah_asal,
            'kelas_id' => $request->kelas_id,
            'tanggal_masuk' => $request->tanggal_masuk,
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
            'pekerja_ayah' => $request->pekerja_ayah,
            'pekerja_ibu' => $request->pekerja_ibu
        ]);

        return redirect('main/siswa')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        $siswa['siswa'] = Siswa::with('kelas', 'agama')->get();
        return view('main.siswa.show', [
            'title' => 'Detail',
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        $kelas = Kelas::all();
        $agama = Agama::all();
        if (auth()->check() && auth()->user()->user_jab_id == 1) {
            return view('main.siswa.edit', [
                'title' => 'Edit Siswa',
                'kelas' => $kelas,
                'agama' => $agama,
                'result' => $siswa
            ]);
        } else {
            return redirect('main/siswa')->with('success', 'Maaf Anda tidak Punya AKses Kesitu!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Siswa::find($id);
        $post->nis = $request->nis;
        $post->password = bcrypt($request->password);
        $post->nama = $request->nama;
        $post->sex = $request->sex;
        $post->tempat_lahir = $request->tempat_lahir;
        $post->tanggal_lahir = $request->tanggal_lahir;
        $post->agama_id = $request->agama_id;
        $post->status = $request->status;
        $post->anak_ke = $request->anak_ke;
        $post->alamat = $request->alamat;
        $post->sekolah_asal = $request->sekolah_asal;
        $post->kelas_id = $request->kelas_id;
        $post->tanggal_masuk = $request->tanggal_masuk;
        $post->ayah = $request->ayah;
        $post->ibu = $request->ibu;
        $post->pekerja_ayah = $request->pekerja_ayah;
        $post->pekerja_ibu = $request->pekerja_ibu;
        $post->save();

        return redirect('main/siswa')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return back()->with('success', 'Data sudah di Hapus!');
    }
}