<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Tipo_producto extends Model
{
    use HasFactory;

    protected $table = 'tipo_producto';
    protected $guarded = [];

    public function profile(){
        return $this->hasOne(Producto::class,'tipo_producto_id','id');
    }
}