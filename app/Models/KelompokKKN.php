<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelompokKKN extends Model
{
    use HasFactory;

    protected $table = 'kelompok_kkn';
    protected $primaryKey = 'id_kelompok';
    protected $fillable = ['Nama', 'id_jenis', 'id_admin', 'id_dosen', 'nim', 'id_ketua', 'Jenis', 'Nama_dosen', 'Nama_mahasiswa', 'Wilayah', 'Provinsi', 'Kabupaten', 'Kecamatan', 'Kelurahan'];
    public $timestamps = true; 

    // Relasi dengan model RencanaKegiatan
    public function rencanaKegiatan()
    {
        return $this->hasMany(RencanaKegiatan::class, 'id_kelompok', 'id_kelompok');
    }
    
    // Relasi dengan model AnggotaKelompok
    public function anggotaKelompok()
    {
        return $this->hasMany(AnggotaKelompok::class, 'id_kelompok', 'id_kelompok');
    }

    // Relasi dengan model JenisKKN (seharusnya belongsTo karena satu kelompok hanya memiliki satu jenis KKN)
    public function jenisKKN()
    {
        return $this->belongsTo(JenisKKN::class, 'id_jenis', 'id_jenis');
    }

    // Relasi dengan model Dosen (seharusnya belongsTo karena satu kelompok hanya memiliki satu dosen)
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }

    // Relasi dengan model Mahasiswa (seharusnya belongsTo karena mahasiswa memiliki nim yang unik)
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    // Relasi dengan model Ketua (seharusnya belongsTo karena satu kelompok hanya memiliki satu ketua)
    public function ketua()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_ketua', 'id_ketua'); // Pastikan bahwa id_ketua merujuk ke Mahasiswa
    }
}
