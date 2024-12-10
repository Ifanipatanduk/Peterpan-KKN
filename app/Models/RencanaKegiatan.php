<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RencanaKegiatan extends Model
{
    use HasFactory;
    protected $table ='rencana_kegiatan';
    protected $fillable = ['Judul', 'Deskripsi', 'File', 'Nama_asli'];
    protected $primaryKey = 'id_rencana';
    public $timestamps = true; 

    public function admin()
    {
        return $this->belongsTo(admin::class, 'id_admin');
    }

    public function dosen_pendamping()
    {
        return $this->belongsTo(dosen_pendamping::class, 'id_pendamping');
    }

    public function anggota_kelompok()
    {
        return $this->belongsTo(anggota_kelompok::class, 'id_anggota');
    }
}
