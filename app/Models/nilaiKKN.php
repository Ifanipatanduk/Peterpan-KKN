<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKKN extends Model
{
    use HasFactory;
    protected $table ='nilai_k_k_n_s';
    protected $fillable = ['Nilai'];
    protected $primaryKey = 'id_nilai';
}
