<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenKegiatan extends Model
{
    use HasFactory;
    protected $table ='dokumen_kegiatans';
    protected $fillable = ['Judul', 'Deskripsi', 'File', 'nama_asli'];
    protected $primaryKey = 'id';
    public $timestamps = true; 
}
