<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ensayo;

class EnsayoController extends Controller
{
    public function index(Request $req){

        $filtro = '';

        if($req->get('filtro')){
            $filtro = $req->get('filtro');
        }
        $builder = Ensayo::orderBy('nombre');

        if($filtro){
            $builder->where("nombre", "LIKE", "%$filtro%");
        }


        $ensayos = $builder->paginate(5);
        return view('ensayo.listado', compact('ensayos'));
    }    
    public function filterByDate(Request $req){

        $fechai = '';
        $fechaf = '';

        if($req->input('fechai') && $req->input('fechaf')){
            // echo "{$req->input('fechai')} <br> {$req->input('fechaf')}";
            $fechai = $req->input('fechai');
            $fechaf = $req->input('fechaf');
        }
        $builder = Ensayo::orderBy('created_at');

        if($fechai && $fechaf){
            $builder->whereBetween('created_at', [$fechai, $fechaf]);
        }

        $ensayos = $builder->paginate(5);
        return view('ensayo.listado', compact('ensayos'));
    }
}
