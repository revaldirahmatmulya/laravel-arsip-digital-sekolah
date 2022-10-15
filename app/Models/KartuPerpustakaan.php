<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuPerpustakaan extends Model
{
    use HasFactory;
    protected $table = "kartu_perpustakaans";
    protected $guarded=[];

    public function murid(){
        return $this->belongsTo(Murid::class);
    }
}