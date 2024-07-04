<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $primaryKey = 'kelas_id';
    protected $table = 'kelas';
    protected $guarded = ['kelas_id'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id', 'kelas_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'kelas_id', 'kelas_id');
    }
}