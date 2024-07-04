<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;
    protected $primaryKey = 'kelompok_id';
    protected $table = 'kelompoks';
    protected $guarded = ['kelompok_id'];



    public function mapel()
    {
        return $this->hasMany(Mapel::class, 'kelompok_id', 'kelompok_id');
    }
}
