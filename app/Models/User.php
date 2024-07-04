<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'user_id';
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'user_jab_id',
        'kelas_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'user_jab_id', 'jab_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'kelas_id');
    }

    public function nilaiharian()
    {
        return $this->hasMany(NilaiHarian::class, 'user_id', 'user_id');
    }

    public function nilaitugas()
    {
        return $this->hasMany(NilaiTugas::class, 'user_id', 'user_id');
    }

    public function nilaiuas()
    {
        return $this->hasMany(NilaiUas::class, 'user_id', 'user_id');
    }

    public function nilaiuts()
    {
        return $this->hasMany(NilaiUts::class, 'user_id', 'user_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }
}