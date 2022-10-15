<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;
    protected $table = "organisasis";
    protected $guarded = ['guru_id', 'created_at', 'updated_at'];


    public function guru(){
        return $this->belongsTo(Guru::class);
    }

    public function murid(){
        return $this->hasMany(Murid::class);
    }
}