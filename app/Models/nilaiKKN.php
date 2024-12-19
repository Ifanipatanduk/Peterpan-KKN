<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKKN extends Model
{
    use HasFactory;
    protected $table ='nilai_kkn';
    protected $fillable = ['nim', 'Nama', 'Nilai'];
    protected $primaryKey = 'id_nilai';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim'); 
    }

    public function nilai()
    {
        return $this->belongsTo(NilaiKKN::class, 'id_nilai', 'id_nilai');
    }

}
