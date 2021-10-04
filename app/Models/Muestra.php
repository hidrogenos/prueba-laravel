<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ensayo;
use App\Models\Producto;

class Muestra extends Model
{
    use HasFactory;

    protected $table = 'muestra';
    protected $guarded = [];

    public function ensayos(){
        return $this->hasMany(Ensayo::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
