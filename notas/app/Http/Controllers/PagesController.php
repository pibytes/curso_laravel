<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        //$notas = App\Nota::all(); //trae todo de la bd corresp al modelo Nota
        $notas = App\Nota::paginate(5); // solo mostrar de a 5
        return view('welcome', compact('notas') );
    }

    public function fotos(){
        return view('fotos');
    }

    public function detalle($id){ //ojo la variable recibe el parametro de la barra
        $nota = App\Nota::findOrFail($id); //no tira error, te manda a 404 si no lo encuentra

        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request){ //request captura la info del formulario
        //return $request->all();

        //validaciones
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaNueva = New App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje_exito', 'Nota agregada');
    }

    public function editar($id){
        $nota = App\Nota::findOrFail($id); //paso todo el objeto con "nota"
        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id){ //recibo el id ademas
        //validaciones
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        
        $notaUpdate = App\Nota::findOrFail($id); //en lugar de crear una nueva la busco
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;

        $notaUpdate->save();

        return back()->with('mensaje_exito', 'Nota actualizada');
    }

    public function eliminar($id){

        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();
    
        return back()->with('mensaje', 'Nota Eliminada');
    }

    public function blog(){
        return view('blog');
    }
    public function nosotros($nombre = null) {
        $equipo = ['santi', 'china', 'jp']; //defino un array
    
        //return view('nosotros', ['equipo'=> $equipo]); //array asociativo
        return view('nosotros', compact('equipo', 'nombre')); //lo miso pero mejor, no repito nombres
    }
}
