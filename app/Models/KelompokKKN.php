<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class KelompokKKN extends Model
{
    use HasFactory;

    protected $table = 'kelompok_kkn';
    protected $primaryKey = 'id_kelompok';
    protected $fillable = ['id_kkn', 'id_admin', 'id_dosen', 'Nama', 'Wilayah', 'Provinsi', 'Kabupaten', 'Kecamatan', 'Kelurahan'];
    public $timestamps = true; 

    public function rencanaKegiatan()
    {
        return $this->hasMany(RencanaKegiatan::class, 'id_kelompok', 'id_kelompok');
    }
    
    public function anggotaKelompok()
    {
        return $this->hasMany(AnggotaKelompok::class, 'id_kelompok', 'id_kelompok');
    }
}

