<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $fillable = ['nomor_induk', 'nama', 'alamat', 'password', 'foto'];

    // public function jadwals()
    // {
    //     return $this->belongsTo(Jadwal::class);
    // }
}
