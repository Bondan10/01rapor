<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $primaryKey = 'semester_id';
    protected $table = 'semesters';
    protected $guarded = ['semester_id'];

    public function nilaiharian()
    {
        return $this->hasMany(NilaiHarian::class, 'semester_id', 'semester_id');
    }

    public function nilaitugas()
    {
        return $this->hasMany(NilaiTugas::class, 'semester_id', 'semester_id');
    }

    public function nilaiuas()
    {
        return $this->hasMany(NilaiUas::class, 'semester_id', 'semester_id');
    }

    public function nilaiuts()
    {
        return $this->hasMany(NilaiUts::class, 'semester_id', 'semester_id');
    }
}
