<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Muestra;

class Ensayo extends Model
{
    use HasFactory;

    protected $table = 'ensayo';
    protected $guarded = [];

    public function muestra(){
        return $this->belongsTo(Muestra::class);
    }
}
