<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKegiatan extends Model
{
    use HasFactory;
    protected $table = 'laporan_kegiatans';
    protected $fillable = ['Judul', 'Deskripsi', 'File', 'nama_asli'];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
