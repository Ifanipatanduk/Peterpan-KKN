<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users'; // Nama tabel di database
    protected $primaryKey = 'user_id'; // Kolom primary key
    public $timestamps = true; // Menggunakan kolom created_at & updated_at

    // Kolom yang bisa diisi
    protected $fillable = ['email', 'password', 'role'];

    // Kolom yang disembunyikan saat diambil
    protected $hidden = ['password'];

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'user_id', 'id');
    }

    public function dosen()
    {
        return $this->hasOne(Dosen::class, 'user_id', 'id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id', 'id');
    }

    public function ketua()
    {
        return $this->hasOne(Ketua::class, 'user_id', 'id');
    }
}
