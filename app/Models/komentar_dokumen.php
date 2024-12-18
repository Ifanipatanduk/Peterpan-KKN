<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar_dokumen extends Model
{
    use HasFactory;
    protected $table ='komentar_dokumen';
    protected $fillable =['user_id', 'id_rencana', 'id_laporan', 'id_logbook', 'Isi_komentar'];
    protected $primaryKey = 'id_komentar';
    public $timestamps = 'true';
}
