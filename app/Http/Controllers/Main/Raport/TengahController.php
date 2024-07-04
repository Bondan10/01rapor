<?php

namespace App\Http\Controllers\Main\Raport;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\NilaiHarian;
use App\Models\NilaiTugas;
use App\Models\NilaiUas;
use App\Models\NilaiUts;
use Illuminate\Http\Request;

class TengahController extends Controller
{
    function index()
    {
        $data['title'] = "Raport Tengah Semester";
        $siswa = Siswa::with('kelas', 'agama')->get();
        $data['result'] = $siswa->sortDesc();
        return view("main.raport.tengah.index", $data);
    }
    public function cetakRaport($siswa_id)
    {
        $data['title'] = "Cetak Raport";
        $siswa = Siswa::findOrFail($siswa_id);
        $uas = 1;
        $tahun = NilaiUas::with('tahun_akademik', 'semester')->findOrFail($uas);

        $nilai_harian = NilaiHarian::where('siswa_id', $siswa_id)->get();
        $nilai_tugas = NilaiTugas::where('siswa_id', $siswa_id)->get();
        $nilai_uts = NilaiUts::where('siswa_id', $siswa_id)->get();
        $nilai_uas = NilaiUas::where('siswa_id', $siswa_id)->get();

        // Hitung total nilai
        $total_harian = $nilai_harian->sum('nilai');
        $total_tugas = $nilai_tugas->sum('nilai');
        $total_uts = $nilai_uts->sum('nilai');
        $total_uas = $nilai_uas->sum('nilai');

        // Hitung jumlah nilai
        $count_harian = $nilai_harian->count();
        $count_tugas = $nilai_tugas->count();
        $count_uts = $nilai_uts->count();
        $count_uas = $nilai_uas->count();

        // Hitung rata-rata nilai
        $rata_rata_harian = $count_harian > 0 ? $total_harian / $count_harian : 0;
        $rata_rata_tugas = $count_tugas > 0 ? $total_tugas / $count_tugas : 0;
        $rata_rata_uts = $count_uts > 0 ? $total_uts / $count_uts : 0;
        $rata_rata_uas = $count_uas > 0 ? $total_uas / $count_uas : 0;

        $data['siswa'] = $siswa;
        $data['tahun'] = $tahun;
        $data['nilai_harian'] = $nilai_harian;
        $data['nilai_tugas'] = $nilai_tugas;
        $data['nilai_uts'] = $nilai_uts;
        $data['nilai_uas'] = $nilai_uas;
        $data['total_harian'] = $total_harian;
        $data['total_tugas'] = $total_tugas;
        $data['total_uts'] = $total_uts;
        $data['total_uas'] = $total_uas;
        $data['count_harian'] = $count_harian;
        $data['count_tugas'] = $count_tugas;
        $data['count_uts'] = $count_uts;
        $data['count_uas'] = $count_uas;
        $data['rata_rata_harian'] = $rata_rata_harian;
        $data['rata_rata_tugas'] = $rata_rata_tugas;
        $data['rata_rata_uts'] = $rata_rata_uts;
        $data['rata_rata_uas'] = $rata_rata_uas;

        return view("main.raport.tengah.cetak", $data);
    }
}