<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketua extends Model
{
    use HasFactory;
    protected $table ='ketua'; 
    protected $fillable = ['id_kelompok'];
    protected $primaryKey = 'id_ketua'; 
    public $timestamps = 'true';

    public function anggota_kelompok()
    {
        return $this->belongsTo(AnggotaKelompok::class);
    } 
}
