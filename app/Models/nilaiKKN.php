<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKKN extends Model
{
    use HasFactory;
    protected $table ='nilai_kkn';
    protected $fillable = ['Nilai'];
    protected $primaryKey = 'id_nilai';
}
