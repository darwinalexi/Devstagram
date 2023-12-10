<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Añade esta línea al principio del archivo


class Registro extends Controller
{
    public function index(){
        $datos = DB::select('select * from registros');
        return view("welcome")->with("datos", $datos);
    }

    public function store(Request $request){
        try {
            $request->validate([
            'nombre'=>'required||string',
            'correo'=>'required||string',
            'clave'=>'required',
            ]);

            $Registro::create([
                'nombre'=>required->nombre,
                'correo'=>required->correo,
                'clave'=>required->clave,


            ]);
        } catch (\Exepcion $e) {
            //throw $th;
        }
    }
}
