<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $table = "spps";
    protected $guarded = [];

    public function murid(){
        return $this->hasMany(Murid::class);
    }
}