<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'siswa_id';
    protected $table = 'siswas';
    protected $guarded = ['siswa_id'];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'agama_id', 'agama_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'kelas_id');
    }


    public function nilaiharian()
    {
        return $this->hasMany(NilaiHarian::class, 'siswa_id', 'siswa_id');
    }

    public function nilaitugas()
    {
        return $this->hasMany(NilaiTugas::class, 'siswa_id', 'siswa_id');
    }

    public function nilaiuas()
    {
        return $this->hasMany(NilaiUas::class, 'siswa_id', 'siswa_id');
    }

    public function nilaiuts()
    {
        return $this->hasMany(NilaiUts::class, 'siswa_id', 'siswa_id');
    }
}
