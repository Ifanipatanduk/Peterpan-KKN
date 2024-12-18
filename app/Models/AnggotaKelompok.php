<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class AnggotaKelompok extends Model
{
    use HasFactory;
    protected $table ='anggota_kelompok';
    protected $fillable =['id_kelompok', 'nim', 'Nama', 'Jabatan'];
    protected $primaryKey ='id_anggota';
    public $timestamps = true;

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function ketua()
    {
        return $this->hasOne(Ketua::class);
    }
}
