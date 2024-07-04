<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $primaryKey = 'mapel_id';
    protected $table = 'mapels';
    protected $guarded = ['mapel_id'];

    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'kelompok_id', 'kelompok_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function nilaiharian()
    {
        return $this->hasMany(NilaiHarian::class, 'mapel_id', 'mapel_id');
    }

    public function nilaitugas()
    {
        return $this->hasMany(NilaiTugas::class, 'mapel_id', 'mapel_id');
    }

    public function nilaiuas()
    {
        return $this->hasMany(NilaiUas::class, 'mapel_id', 'mapel_id');
    }

    public function nilaiuts()
    {
        return $this->hasMany(NilaiUts::class, 'mapel_id', 'mapel_id');
    }
}
