<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table ='admin';
    protected $fillable = ['Nama', 'Email'];
    protected $primaryKey ='id_admin';
    public $timestamps = true;

    public function hakAkses()
    {
        return $this->belongsT0(hakAkses::class, 'user_id', 'id');
    }
}
