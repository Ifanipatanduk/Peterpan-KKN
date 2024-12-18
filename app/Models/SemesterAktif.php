<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class SemesterAktif extends Model
{
    use HasFactory;
    protected $table = 'semester';
    protected $fillable = ['Nama'];
    protected $primaryKey = 'id_semester';
    public $timestamps = true;


}
