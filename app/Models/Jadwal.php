<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = "jadwal";
    protected $fillable = ['nama_hari','matkul', 'siswa_id'] ;

    // public function siswa()
    // {
    //     return $this->belongsTo(siswa::class);
    // }
}
