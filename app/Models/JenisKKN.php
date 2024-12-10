<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class JenisKKN extends Model
{
    use HasFactory;
    protected $table ='jenis_kkn';
    protected $fillable = ['Jenis', 'Deskripsi', 'Wilayah', 'Provinsi', 'Kabupaten', 'Kecamatan', 'Kelurahan', 'Tanggal_mulai', 'Tanggal_selesai'];
    protected $primaryKey = 'id_kkn';
    public $timestamps = true;
}
