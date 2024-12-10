<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogbookKegiatan extends Model
{
    use HasFactory;
    protected $table = 'logbook_kegiatan'; 
    protected $fillable = ['Tanggal_kegiatan','Waktu_mulai','Waktu_selesai','Deskripsi',];
    protected $primaryKey ='id_logbook';
    public $timestamps = true;
}
