<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;
    protected $primaryKey = 'agama_id';
    protected $table = 'agamas';
    protected $guarded = ['agama_id'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'agama_id', 'agama_id');
    }
}