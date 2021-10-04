<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo_producto;
use App\Models\Muestra;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $guarded = [];

    public function tipo_producto(){
        return $this->belongsTo(Tipo_producto::class);
    }

    public function muestra(){
        return $this->hasOne(Muestra::class,'producto_id','id');
    }
}
