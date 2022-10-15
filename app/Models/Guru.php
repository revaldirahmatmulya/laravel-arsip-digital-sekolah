<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "gurus";
    protected $guarded = [];

    public function organisasi(){
        return $this->hasMany(Organisasi::class);
    }
    public function mapel(){
        return $this->hasMany(MataPelajaran::class);
    }
    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
}