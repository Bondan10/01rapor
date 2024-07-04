<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    use HasFactory;
    protected $primaryKey = 'tahun_akademik_id';
    protected $table = 'tahun_akademiks';
    protected $guarded = ['tahun_akademik_id'];

    public function nilaiharian()
    {
        return $this->hasMany(NilaiHarian::class, 'tahun_akademik_id', 'tahun_akademik_id');
    }

    public function nilaitugas()
    {
        return $this->hasMany(NilaiTugas::class, 'tahun_akademik_id', 'tahun_akademik_id');
    }

    public function nilaiuas()
    {
        return $this->hasMany(NilaiUas::class, 'tahun_akademik_id', 'tahun_akademik_id');
    }

    public function nilaiuts()
    {
        return $this->hasMany(NilaiUts::class, 'tahun_akademik_id', 'tahun_akademik_id');
    }
}