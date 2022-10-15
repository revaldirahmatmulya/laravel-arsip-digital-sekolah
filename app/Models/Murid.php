<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = "murids";
    protected $guarded =[];

    public function ekstrakulikuler(){
        return $this->belongsTo(Ekstrakulikuler::class);
    }

    public function spp(){
        return $this->belongsTo(Spp::class);
    }

    public function organisasi(){
        return $this->belongsTo(Organisasi::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function kartuPerpustakaan(){
        return $this->hasOne(KartuPerpustakaan::class);
    }
}