<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    use HasFactory;
     protected $table = "ekstrakulikulers";
    protected $guarded = [];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }
    public function murid(){
        return $this->hasMany(Murid::class);
    }
}