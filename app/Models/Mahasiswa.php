<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['nim', 'Nama', 'Jenis_kelamin', 'Kontak', 'Email', 'Prodi', 'Fakultas'];
    protected $primaryKey = 'nim';
    public $timestamps = true;

    public function kelompok_kkn()
    {
        return $this->belongsTo(kelompok_kkn::class, 'id_kelompok');
    }

    public function users()
    {
        return $this->belongsT0(Users::class, 'user_id');
    }
}
