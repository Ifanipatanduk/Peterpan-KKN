<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogbookKegiatan extends Model
{
    use HasFactory;
    protected $table = 'logbook_kegiatans'; 
    protected $fillable = ['tanggal_kegiatan','waktu_mulai','waktu_selesai','deskripsi',];
    protected $primaryKey ='id';
    public $timestamps = true;
}
