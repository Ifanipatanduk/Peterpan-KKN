<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenPendamping extends Model
{
    use HasFactory;
    protected $table ='dosen_pendamping';
    protected $fillable = ['id_kkn', 'id_dosen', 'id_kelompok'];
    protected $primaryKey = 'id_pendamping';
    public $timestamps = true;

    public function kelompok_kkn()
    {
        return $this->belongsTo(kelompok_kkn::class, 'id_kelompok');
    }
}
