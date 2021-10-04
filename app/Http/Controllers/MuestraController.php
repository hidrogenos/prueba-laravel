<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Muestra;

class MuestraController extends Controller
{
    public function index(){
        $muestras = Muestra::get();
        // dd($muestras);

        return view('muestra.index', array(
            'muestras' => $muestras
        ));
    }
    public function detail($id){        
        $muestra = Muestra::where('id', $id)->first();
        
        // dd($muestra);
        return view('muestra.detail', compact('muestra'));
    }
    public function create(){
        return view('muestra.create');
    }
    public function save(Request $req){
        // dd($req->input());
        $save = Muestra::create(Array(
            'lote' => $req->input('lote'),
            'cliente' => $req->input('cliente'),
            'producto_id' => $req->input('producto_id'),
            'fecha_llegada' => $req->input('fecha_llegada')
        ));
        
        $status = $save ? 'muestra creada' : 'woops error creando muestra';
        return redirect()->action('MuestraController@index')->with('status', $status);
    }
    public function update($id){
        $muestra = Muestra::where('id', $id)->first();
        return view('muestra.create', compact('muestra'));
    }
    public function doUpdate(Request $req){
        $id = $req->input('id');
        $upd = Muestra::where('id',$id)->update(Array(
            'lote' => $req->input('lote'),
            'cliente' => $req->input('cliente'),
            'producto_id' => $req->input('producto_id'),
            'fecha_llegada' => $req->input('fecha_llegada')
        ));

        $status = $upd ? 'muestra actualizada' : 'woops error actualizando muestra';
        return redirect()->action('MuestraController@index')->with('status', $status);
    }
    public function delete($id){
        $muestra = Muestra::find($id);
        $del = $muestra->delete();

        $status = $del ? 'muestra eliminada' : 'woops error eliminando muestra';
        return redirect()->action('MuestraController@index')->with(compact('status'));
    }
}
