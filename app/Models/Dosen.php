<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = ['Nama', 'Email', 'Kontak', 'Jenis_kelamin', 'Fakultas'];
    protected $primaryKey = 'id_dosen';
    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id', 'user_id')->withDefault();
    }    
}
